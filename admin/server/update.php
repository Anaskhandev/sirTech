<?php
require '../inc/init.php';


if (isset($_POST['content'])) {

  $sec = $conn->real_escape_string($_POST['sec']);

  $heading = $conn->real_escape_string($_POST['heading']);
  $text = $conn->real_escape_string($_POST['content']);
  $link = $conn->real_escape_string($_POST['link']);
  $id = $_POST['header_id'];

  if (empty($_FILES["fileToUpload"]["name"])) {

    $qry = "UPDATE $sec SET `heading`='$heading',`text`='$text', `learn_more_link`='$link' WHERE id='$id'";
    $res = $conn->query($qry);
    if ($res == true) {
      echo 'updated';
    } else {
      echo 'error';
    }
  } else if (!empty($_FILES["fileToUpload"]["name"])) {

    $picture = $_FILES["fileToUpload"]["name"];
    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
      // echo $heading;
      $qry = "UPDATE $sec SET `heading`='$heading',`text`='$text', `learn_more_link`='$link', `picture`='$picture' WHERE id='$id'";
      $res = $conn->query($qry);
      if ($res == true) {
        echo 'updated';
      } else {
        echo 'error';
      }
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
    // if ($check !== false) {
    //   echo "File is an image - " . $check["mime"] . ".";
    //   $uploadOk = 1;
    // } else {
    //   echo "File is not an image.";
    //   $uploadOk = 0;
    // }
  }
} else if (isset($_POST['content3'])) {
  $sec = $conn->real_escape_string($_POST['sec']);

  $heading = $conn->real_escape_string($_POST['heading']);
  $text = $conn->real_escape_string($_POST['content']);
  $link = $conn->real_escape_string($_POST['link']);
  $id = $_POST['header_id'];

  if (empty($_FILES["fileToUpload"]["name"])) {
    $qry = "UPDATE $sec SET `heading`='$heading',`text`='$text', `learn_more_link`='$link', `picture`='$picture' WHERE id='$id'";
    $res = $conn->query($qry);
    if ($res == true) {
      echo 'updated';
    } else {
      echo 'error';
    }
  } else if (!empty($_FILES["fileToUpload"]["name"])) {

    $picture = $_FILES["fileToUpload"]["name"];
    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
      // echo $heading;
      $qry = "UPDATE $sec SET `heading`='$heading',`text1`='$text1', `learn_more_link`='$link', `picture`='$picture' WHERE id='$id'";
      $res = $conn->query($qry);
      if ($res == true) {
        echo 'updated';
      } else {
        echo 'error';
      }
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
    // if ($check !== false) {
    //   echo "File is an image - " . $check["mime"] . ".";
    //   $uploadOk = 1;
    // } else {
    //   echo "File is not an image.";
    //   $uploadOk = 0;
    // }
  }
} else if (isset($_POST['bandwidth'])) {

  $sec = $conn->real_escape_string($_POST['sec']);

  $heading = $conn->real_escape_string($_POST['heading']);
  $support_label = $conn->real_escape_string($_POST['support_label']);
  $support = $conn->real_escape_string($_POST['support']);
  $bandwidth_label = $conn->real_escape_string($_POST['bandwidth_label']);
  $bandwidth = $conn->real_escape_string($_POST['bandwidth']);
  $space_label = $conn->real_escape_string($_POST['space_label']);
  $space = $conn->real_escape_string($_POST['space']);
  $users_label = $conn->real_escape_string($_POST['users_label']);
  $users = $conn->real_escape_string($_POST['users']);
  $featured = $conn->real_escape_string($_POST['featured']);
  $support2_label = $conn->real_escape_string($_POST['support2_label']);
  $support2 = $conn->real_escape_string($_POST['support2']);
  $mysql_label = $conn->real_escape_string($_POST['mysql_label']);
  $mysql = $conn->real_escape_string($_POST['mysql']);

  $id = $_POST['header_id'];


  $qry = "UPDATE $sec SET `heading`='$heading',`support`='$support',`support_label`='$support_label',`support2`='$support2',`support2_label`='$support2_label',`mysql`='$mysql',`mysql_label`='$mysql_label',`bandwidth`='$bandwidth',`bandwidth_label`='$bandwidth_label', `space`='$space', `space_label`='$space_label', `users`='$users',`users_label`='$users_label', `featured`='$featured' WHERE id='$id'";
  $res = $conn->query($qry);
  if ($res == true) {
    echo 'updated';
  } else {
    echo 'error';
  }
} else if (isset($_POST['content1'])) {

  $sec = $conn->real_escape_string($_POST['sec']);

  $heading = $conn->real_escape_string($_POST['heading']);
  $text1 = $conn->real_escape_string($_POST['content1']);
  $text2 = $conn->real_escape_string($_POST['content2']);
  $sub_heading = $conn->real_escape_string($_POST['sub_heading']);
  $id = $_POST['header_id'];


  $qry = "UPDATE $sec SET `heading`='$heading',`text1`='$text1',`text2`='$text2', `sub_heading`='$sub_heading' WHERE id='$id'";
  $res = $conn->query($qry);
  if ($res == true) {
    echo 'updated';
  } else {
    echo 'error';
  }
}
