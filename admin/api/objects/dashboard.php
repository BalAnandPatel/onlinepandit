<?php
class Dashboard
{

    private $conn;
    private $table_name = "booking";
    private $table_contact = "contact";

    public $id, $name, $eventId, $userMobile, $fromDate, $toDate, $message, $regDate, $status, $cancelledBy, $updationDate;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function total_pending_booking()
    {

        $query = "SELECT COUNT(id) as reg_count FROM " . $this->table_name . " where status=0";
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function total_complete_booking()
    {

        $query = "SELECT COUNT(id) as reg_count FROM " . $this->table_name . " where status=1";
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function total_inquiry()
    {

        $query = "SELECT COUNT(id) as reg_count FROM " . $this->table_contact;
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }

}
