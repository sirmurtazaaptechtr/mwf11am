<?php
include('functions.inc.php');

// pr($_REQUEST);
pr($_FILES);

$target_dir = "assets/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$source_file = $_FILES['fileToUpload']['tmp_name'];
$uploadOk = true;

// // Allow certain file formats
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = false;
// }
if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ) {
    echo "You are good to go.";
    $uploadOk = true;
}else {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = false;
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = false;
  }

if($uploadOk) {
    move_uploaded_file($source_file,$target_file);
}
