<?php
  $folder = "files/";
  $directory = scandir($folder);
  $length = count($directory);

  for($count = 0; $count < $length; $count++) {
    if($directory[$count] != "." && $directory[$count] != "..") {
      echo "<a href=\"" . $folder . $directory[$count] . "\">".$directory[$count]."</a><br/>";
    }
  }
?>
