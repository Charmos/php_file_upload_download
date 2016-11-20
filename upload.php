<?php
  $target_folder = "files/";
  $target_file = $target_folder . basename($_FILES["file-upload"]["name"]);
  $messagge = "";
  //echo $target_file;
  if(move_uploaded_file($_FILES["file-upload"]["tmp_name"], $target_file)) {
    $message = "The file " . basename($_FILES["file-upload"]["name"]) . " has been successfully uploaded.";
  } else {
    $message = "File upload unsuccessful.";
  }
?>

<!DOCTYPE html>
<html>
  <head>
      <?php include "head.php" ?>
    <title>Successful Download</title>
  </head>
  <body>
    <div class="message">
        <?php
          echo $message
        ?>
    </div>
    <div class="button-container">
      <a href="index.php" class="button">upload another file</a>
      <a href="download.php" class="button">go to files</a>
    </div>
  </body>
</html>
