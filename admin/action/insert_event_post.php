<?php
include '../../constant.php';
$url = $URL . "events/insert_events_detail.php";
$url_read_maxId = $URL . "events/read_maxId.php";
$name = ucfirst($_POST["name"]);
$description = ucfirst($_POST["description"]);
$created_at = date("Y-m-d H:i:s");

if (isset($_POST["submit"])) {

  $target_dir = "../image/event/";
  $target_file_type = basename($_FILES["uploaded_file"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file_type, PATHINFO_EXTENSION));


  $check = getimagesize($_FILES["uploaded_file"]["tmp_name"]);
  //print_r($check);

  if ($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }


  // Check file size
  if ($_FILES["uploaded_file"]["size"] > 5000000) {
    $msg = "Sorry, your file is too large.";
    $_SESSION["eventsErrors"] = $msg;
    header('Location:../upload_gallery_image.php');
    $uploadOk = 0;
  }

  // Allow certain file formats
  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    $msg = "Sorry, only JPG, JPEG, PNG files are allowed.";
    $_SESSION["eventsErrors"] = $msg;
    header('Location:../upload_gallery_image.php');
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $msg = "Sorry, your file was not uploaded.";
    header('Location:../upload_gallery_image.php');
  } else {

    /* --- get maximum userid -----*/

    $data_maxId = array();
    $maxId_postdata = json_encode($data_maxId);
    $result_galleryMaxId = url_encode_Decode($url_read_maxId, $maxId_postdata);
    //print_r($result_galleryMaxId);
    $id = $result_galleryMaxId->records[0]->id;


    $target_file = $target_dir . "event_" . $id . ".png";

    $data = array(
      "name" => $name,
      "image" => "event_" . $id . ".png",
      "description" => $description,
      "created_at" => $created_at
    );

    //print_r($data);
    $postdata = json_encode($data);
    $result_gallery = url_encode_Decode($url, $postdata);
    //print_r($result_gallery);

    if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $target_file)) {

      $_SESSION["eventsSuccessMsg"] = "File uploaded succesfully.";
      header('Location:../insert_events.php');
    } else {
      //   echo "Sorry, there was an error uploading your file.";
      $_SESSION["eventsErrors"] = "Sorry, there was an error uploading your file.";
      // header('Location:../insert_events.php');
    }
  }
}

function url_encode_Decode($url, $postdata)
{
  $client = curl_init($url);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  $response = curl_exec($client);
  //print_r($response);
  return $result = json_decode($response);
}
