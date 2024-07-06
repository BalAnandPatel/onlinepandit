<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// database connection will be here

// include database and object files
include_once '../../config/database.php';
include_once '../../objects/booking.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$booking_list = new Booking($db);

$data = json_decode(file_get_contents("php://input"));
// print_r($data);
$booking_list->status = $data->status;

$stmt = $booking_list->booking_list();
$num = $stmt->rowCount();

// check if more than 0 record found
if ($num > 0) {

    // products array
    $read_booking_arr = array();
    $read_booking_arr["records"] = array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        $read_booking_item = array(
            "id" => $id,
            "name" => $name,
            "userMobile" => $userMobile,
            "eventname" => $eventname,
            "description" => $description,
            "eventId" => $eventId,
            "message" => $message,
            "status" => $status,
            "regDate" => $regDate
        );

        array_push($read_booking_arr["records"], $read_booking_item);
    }

    // show products data in json format
    echo json_encode($read_booking_arr);

    // set response code - 200 OK
    http_response_code(200);
}

// no products found will be here
else {

    // set response code - 404 Not found
    http_response_code(404);

    // tell the user no products found
    echo json_encode(
        array("message" => "No gallery record found.")
    );
}
