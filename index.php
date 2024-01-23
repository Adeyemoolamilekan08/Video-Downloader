<?php
include("code.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YouTube Video Downloader</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <header>Video Downloader</header>

    <div class="url-input">
      <span class="title">Paste video url:</span>
      <div class="field">
        <input type="text" placeholder="https://www.youtube.com/watch?v=lqwdD2ivIbM" required>
        <input class="hidden-input" type="hidden" name="imgurl">
        <span class="bottom-line"></span>
      </div>
    </div>

    <div class="preview-area">
      <img class="thumbnail" src="" alt="">
      <i class="icon fas fa-cloud-download-alt"></i>
      <span>Paste video url to see preview</span>
    </div>

    <button class="download-btn" type="submit" name="button">
      Download Video
    </button>

  </form>

  <script src="script.js"></script>

</body>
</html>
