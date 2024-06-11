<?php
class Admin
{

    private $conn;
    private $table_name = "booking";
    public $id, $packageId, $userEmail, $fromDate, $toDate, $message, $regDate, $status, $cancelledBy, $updationDate;


    public function __construct($db)
    {
        $this->conn = $db;
    }
}
