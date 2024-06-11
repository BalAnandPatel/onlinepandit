<?php
class Galley
{

    private $conn;
    private $table_name = "image_gallery";

    public $id, $message, $image, $status, $created_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // code for image gallery

    function insert_image()
    {

        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                         message=:message, 
                         image=:image, 
                         status=0,
                         created_at=:created_at
                    ";

        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->message = htmlspecialchars(strip_tags($this->message));
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->created_at = htmlspecialchars(strip_tags($this->created_at));

        //bind values
        $stmt->bindParam(":message", $this->message);
        $stmt->bindParam(":image", $this->image);
        $stmt->bindParam(":created_at", $this->created_at);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function read_image_maxId()
    {
        $query = "Select max(id) as id from " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function read_image()
    {
        $query = "Select * from " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }

    function delete_image()
    {
        //delete query
        $query = " DELETE FROM " . $this->table_name . " WHERE id= ? ";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->id = htmlspecialchars(strip_tags($this->id));

        // bind id of record to delete
        $stmt->bindParam(1, $this->id);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
