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
include_once '../../objects/events.php';

$database = new Database(); 
$db = $database->getConnection();

$insert_event = new Events($db);

// get posted data
$data = json_decode(file_get_contents("php://input"));
 //print_r($data);  
// make sure data is not empty
if (

    !empty($data->name)
)
 {

    $insert_event->name = $data->name;
    $insert_event->image = $data->image;
    $insert_event->description = $data->description;
    $insert_event->created_at = $data->created_at;


    //var_dump($reg);
    // create the reg
    if ($insert_event->insert_event()) {

        http_response_code(201);
        echo json_encode(array("message" => "Successfull"));
    } else {

        // set response code - 503 service unavailable
        http_response_code(503);

        // tell the user
        echo json_encode(array("message" => "Unable to create insert_event"));
    }
}

// tell the user data is incomplete
else {

    // set response code - 400 bad request
    http_response_code(400);

    // tell the user
    echo json_encode(array("message" => "Unable to create insert_event. Data is incomplete."));
}
