<?php
class Admin
{

    private $conn;
    private $table_name = "events";
    public $id, $name, $status, $created_by, $created_on, $updated_on, $updated_by;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    
}
