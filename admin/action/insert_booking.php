<?php
include '../../constant.php';

if (isset($_POST["mobile"])) {
    $name = trim($_POST['first_name']) . " " . trim($_POST['last_name']);
    $mobile = $_POST["mobile"];
    $event = $_POST["event"];
    $message = $_POST["message"];
    $status = 0;
    $created_at = date("Y-m-d H:i:s");

    $url = $URL . "booking/insert_booking.php";
    $data = array("name" => $name, "mobile" => $mobile, "event" => $event, "message" => $message, "created_at" => $created_at);

    //print_r($data);
    $postdata = json_encode($data);
    $result = url_encode_Decode($url, $postdata);
    // print_r($result);
    if ($result->message == "Form Submitted Successfully.") {
        $_SESSION["bookingSuccessMsg"] = "Booking done succesfully.";
        header('Location:../../booknow.php');
    } else {
        $_SESSION['bookingErrors'] = $result->message;
    }
    header('Location:../../booknow.php');
}

function url_encode_Decode($url, $postdata)
{
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
    $response = curl_exec($client);
    //print_r($response);
    $result = json_decode($response);
    return $result;
}
