<?php
include '../../constant.php';

if (isset($_POST["email"])) {
    $name = trim($_POST['first_name']) . " " . trim($_POST['last_name']);
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $status = 0;
    $created_at = date("Y-m-d H:i:s");

    $url = $URL . "contact/insert_contact.php";
    $data = array("name" => $name, "email" => $email, "mobile" => $mobile, "subject" => $subject, "message" => $message, "created_at" => $created_at);

    //print_r($data);
    $postdata = json_encode($data);
    $result = url_encode_Decode($url, $postdata);
    // print_r($result);
    if ($result->message == "Form Submitted Successfully.") {
        $_SESSION["contactSuccessMsg"] = "Contact Form Submitted succesfully.";
        header('Location:../../contact.php');
    }
    header('Location:../../contact.php');
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
