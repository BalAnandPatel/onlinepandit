<?php
class Contact
{

    // database connection and table product_id
    private $conn;
    private $contact = "contact";

    // object properties
    public $id, $name, $email, $mobile, $subject, $message, $status, $created_at, $updated_at;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    // insert customer
    function insert_contact()
    {

        // query to insert record
        $query = "INSERT INTO
                    " . $this->contact . "
                SET
                        name=:name,
                        email=:email,
                        mobile=:mobile,
                        subject=:subject,
                        message=:message,
                        status=0,
                        created_at=:created_at";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        // $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->mobile = htmlspecialchars(strip_tags($this->mobile));
        $this->subject = htmlspecialchars(strip_tags($this->subject));
        $this->message = htmlspecialchars(strip_tags($this->message));
        $this->created_at = htmlspecialchars(strip_tags($this->created_at));
        // $this->updated_at = htmlspecialchars(strip_tags($this->updated_at));

        //bind values
        // $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":mobile", $this->mobile);
        $stmt->bindParam(":subject", $this->subject);
        $stmt->bindParam(":message", $this->message);
        $stmt->bindParam(":created_at", $this->created_at);
        // $stmt->bindParam(":updated_at", $this->updated_at);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function contact_list()
    {
        $query = "Select id, name, email, mobile, subject, message, status, created_at, updated_at from " . $this->contact;
        $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }
}
