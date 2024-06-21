<?php
class Events
{

    private $conn;
    private $table_name = "events";

    public $id, $name, $description, $image, $status, $created_at, $updated_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function insert_event()
    {

        // query to insert record
         $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                         name=:name, 
                         description=:description, 
                         image=:image, 
                         status=0,
                         created_at=:created_at";

        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->created_at = htmlspecialchars(strip_tags($this->created_at));

        //bind values
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":image", $this->image);
        $stmt->bindParam(":created_at", $this->created_at);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function read_events_maxId()
    {
        $query = "Select max(id) as id from " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function read_events()
    {
        $query = "Select * from " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }

    function delete_events()
    {

        //delete query
        $query = " DELETE FROM " . $this->table_name . " 
        WHERE id= ? ";

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
