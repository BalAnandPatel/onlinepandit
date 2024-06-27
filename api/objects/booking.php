<?php
class Booking
{

    private $conn;
    private $table_name = "booking";
    public $id, $name, $eventId, $userMobile, $fromDate, $toDate, $message, $regDate, $status, $cancelledBy, $updationDate;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function insert_booking()
    {
        // query to insert record
        $query = "INSERT INTO
          " . $this->table_name . "
      SET
              name=:name,
              userMobile=:userMobile,
              eventId=:eventId,
              message=:message,
              status=0,
              regDate=:regDate";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        // $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->userMobile = htmlspecialchars(strip_tags($this->userMobile));
        $this->eventId = htmlspecialchars(strip_tags($this->eventId));
        $this->message = htmlspecialchars(strip_tags($this->message));
        $this->regDate = htmlspecialchars(strip_tags($this->regDate));
        // $this->updated_at = htmlspecialchars(strip_tags($this->updated_at));

        //bind values
        // $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":userMobile", $this->userMobile);
        $stmt->bindParam(":eventId", $this->eventId);
        $stmt->bindParam(":message", $this->message);
        $stmt->bindParam(":regDate", $this->regDate);
        // $stmt->bindParam(":updated_at", $this->updated_at);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function booking_list()
    {
        $query = "Select booking.id, booking.name, events.name as eventname,events.description, booking.eventId, userMobile, fromDate, toDate, message, regDate, booking.status, cancelledBy, updationDate from " . $this->table_name . " as booking left join events as events on booking.eventId=events.id where booking.status=:status";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":status", $this->status);
        $stmt->execute();
        return $stmt;
    }

    function booking_approve()
    {

        // query to insert record
        $query = "UPDATE 
                    " . $this->table_name . "
                SET
                            status=:status
                            WHERE id=:id";

        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->status = htmlspecialchars(strip_tags($this->status));

        //bind values
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":status", $this->status);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
