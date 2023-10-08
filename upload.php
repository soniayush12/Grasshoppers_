<?php
// Get the name and extension of the uploaded file
$filename = $_FILES["file"]["name"];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// Specify the destination folder and the new name of the file
$target_dir = "uploads/";
$newname = "myFile." . $ext;
$target_file = $target_dir . $newname;

// Move the uploaded file to the target folder
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
  echo "The file has been uploaded successfully.";
} else {
  echo "There was an error uploading the file.";
}
?>