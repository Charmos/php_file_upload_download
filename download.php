<!DOCTYPE html>
<html>
  <head>
    <?php include "head.php" ?>
    <meta charset="utf-8">
    <title>Download File</title>
  </head>
  <body>
    <div class="content">
      <div class="header"></div>
      <div class="button-container message">
        <a href="index.php" class="button">Back to Home</a>
      </div>
      <div class="message">
        <ul>
          <?php
            $folder = "files/";
            $directory = scandir($folder);
            $length = count($directory);

            for($count = 0; $count < $length; $count++) {
              if($directory[$count] != "." && $directory[$count] != "..") {
                echo "<li><a href=\"" . $folder . $directory[$count] . "\">".$directory[$count]."</a></li>";
              }
            }
          ?>
        </ul>
      </div>
    </div>
    <div class="footer"></div>
  </body>
</html>
