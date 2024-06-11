<?php
class Review
{

    // database connection and table product_id
    private $conn;
    private $review = "contact";

    // object properties
    public $id, $name, $email, $subject, $description, $status, $created_at, $updated_at;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    // insert customer
    function add_review()
    {

        // query to insert record
        $query = "INSERT INTO
                    " . $this->review . "
                SET
                        name=:name,
                        email=:email,
                        subject=:subject,
                        description=:description,
                        status=0,
                        created_at=:created_at,
                        updated_at=:updated_at";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->subject = htmlspecialchars(strip_tags($this->subject));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->created_at = htmlspecialchars(strip_tags($this->created_at));
        $this->updated_at = htmlspecialchars(strip_tags($this->updated_at));

        //bind values
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":subject", $this->subject);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":created_at", $this->created_at);
        $stmt->bindParam(":updated_at", $this->updated_at);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
