<!DOCTYPE html>
<html>
  <head>
    <?php include "head.php" ?>
    <title>File Upload/Download</title>
  </head>
  <body>
      <div class="content">
        <div class="header"></div>
        <form class="" action="upload.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file-upload" id="choose-file">
          <input type="submit" name="submit" value="Upload File" class="button">
        </form>
      </div>
      <div class="footer"></div>
  </body>
</html>
