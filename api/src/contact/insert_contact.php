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
include_once '../../objects/contact.php';

$database = new Database();
$db = $database->getConnection();

$contact = new Contact($db);

// get posted data
$data = json_decode(file_get_contents("php://input"));
// print_r($data);  
// make sure data is not empty
if (

    !empty($data->email)
) {

    $contact->name = $data->name;
    $contact->email = $data->email;
    $contact->mobile = $data->mobile;
    $contact->subject = $data->subject;
    $contact->message = $data->message;
    $contact->created_at = $data->created_at;

    //var_dump($reg);
    // create the reg
    if ($contact->insert_contact()) {
        http_response_code(201);
        echo json_encode(array("message" => "Form Submitted Successfully."));
    } else {

        // set response code - 503 service unavailable
        http_response_code(503);

        // tell the user
        echo json_encode(array("message" => "Unable to create insert_gallery"));
    }
}

// tell the user data is incomplete
else {

    // set response code - 400 bad request
    http_response_code(400);

    // tell the user
    echo json_encode(array("message" => "Unable to create insert_gallery. Data is incomplete."));
}
