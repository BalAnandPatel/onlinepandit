<?php
include '../../constant.php';

if (isset($_POST["id"])) {

    $id = $_POST["id"];
    $status = 1;

    $url = $URL . "booking/booking_update_approve.php";
    $data = array("id" => $id, "status" => $status);

    //print_r($data);
    $postdata = json_encode($data);
    $result = url_encode_Decode($url, $postdata);
    //print_r($result);
    if ($result->message == "Successfull") {

        $msg = "Booking approved successfully";
        header('Location:../pending_booking.php?success=' . $msg);
    }
    header('Location:../pending_booking.php');
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

?>