<?php

if (isset($_POST['delete'])) {

  include "../../constant.php";

  $id = $_POST['id'];

  $file = "../image/event/" . $_POST['image'];

  $url = $URL . "events/delete_events.php";

  $data = array('id' => $id);
  //print_r($data);

  $postdata = json_encode($data);
  $client = curl_init($url);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($client);
  //print_r($response);    
  $result = json_decode($response);
  //print_r($result);

  if ($result->message == "Record has been deleted.") {

    unlink($file);
    $_SESSION["event_delete_success"] = "Successfully Deleted";
  } else {
    header('location:../events_record.php');
  }

  header('location:../events_record.php');
}
