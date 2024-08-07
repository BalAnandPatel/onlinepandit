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
include_once '../../objects/contact.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$contact_list = new Contact($db);

$data = json_decode(file_get_contents("php://input"));

$stmt = $contact_list->contact_list();
$num = $stmt->rowCount();

// check if more than 0 record found
if ($num > 0) {

    // products array
    $read_contact_arr = array();
    $read_contact_arr["records"] = array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        $read_contact_item = array(
            "id" => $id,
            "name" => $name,
            "email" => $email,
            "mobile" => $mobile,
            "subject" => $subject,
            "message" => $message,
            "created_at" => $created_at
        );

        array_push($read_contact_arr["records"], $read_contact_item);
    }

    // show products data in json format
    echo json_encode($read_contact_arr);

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
