<html>
  <head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  </head>
  <style>
  body{
    font-family: 'Roboto', sans-serif;
    background:#02030c;
  }
  .header{
    color:#03dac6;
    width: 70%;
    margin: auto;
    margin-top: 5%;
    font-size:35px;
    text-align:center;
  }
  .dest{
    color:#bb86fc;
    width: 70%;
    margin: auto;
    margin-top: 10%;
    font-size:18px;
    text-align:center;
  }
  .footer-text{
    color: #03dac6;
    width: 70%;
    margin: auto;
    font-size: 16px;
    text-align: center;
    position: fixed;
    bottom: 10px;
    background: #02030c;
  }
  .source{
    width: 100%;
    border-radius: 30px;
    border: 2px solid;
    font-size: 22px;
    padding:10px;
  }
  .download{
    width: 30%;
    height: 7%;
    margin: 5% auto;
    display: block;
    border-radius: 30px;
    border: 2px solid;
    background: #03dac6;
  }
  
  </style>
<p class="header">
Download a file from any URL</p>
<form method="post" style="width: 70%;margin: auto;margin-top: 10%;">
<input name="url" size="50" placeholder="Source URL" class="source" required>
<input name="submit" type="submit" value="Download" class="download">
<p class="dest">
To <?php echo getcwd(); ?></p>
<p class="footer-text">
Powered by <a href="https://xristosavgeros.com" target="_blank" style="color:#03dac6;text-decoration:none;">Xristos Avgeros</a></p>
</form>
<?php
    // maximum execution time in seconds
    set_time_limit (24 * 60 * 60);
    if (!isset($_POST['submit'])) die();
    // folder to save downloaded files to. must end with slash
    $destination_folder = '';
    $url = $_POST['url'];
    $newfname = $destination_folder . basename($url);
    /*  // old script
    $file = fopen ($url, "rb");
    if ($file) { $newf = fopen ($newfname, "wb");
      if ($newf)
      while(!feof($file)) { fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 ); }
    }
    if ($file) { fclose($file); }
    if ($newf) { fclose($newf); }
    */
    file_put_contents( $newfname, fopen($url, 'r'));
?>
</html>