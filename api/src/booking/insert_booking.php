<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get database connection
include_once '../../config/database.php';

// instantiate reg object
include_once '../../objects/booking.php';

$database = new Database();
$db = $database->getConnection();

$booking = new Booking($db);

// get posted data
$data = json_decode(file_get_contents("php://input"));
// print_r($data);  
// make sure data is not empty
if (

    !empty($data->mobile)
) {

    $booking->name = $data->name;
    $booking->userMobile = $data->mobile;
    $booking->eventId = $data->event;
    $booking->message = $data->message;
    $booking->regDate = $data->created_at;

    //var_dump($reg);
    // create the reg
    if ($booking->insert_booking()) {
        http_response_code(201);
        echo json_encode(array("message" => "Form Submitted Successfully."));
    } else {

        // set response code - 503 service unavailable
        http_response_code(503);

        // tell the user
        echo json_encode(array("message" => "Unable to submit form"));
    }
}

// tell the user data is incomplete
else {

    // set response code - 400 bad request
    http_response_code(400);

    // tell the user
    echo json_encode(array("message" => "Unable to create submit form. Data is incomplete."));
}
