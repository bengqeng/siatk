<!DOCTYPE>
<html>
<head>
  <title>Error Database setup</title>
  <style type="text/css">
    html, body{
      width: 100%;
      height: 100vh;
      margin: 0;
      background: green;
      text-align: center;
      overflow: hidden;
    }
    #error {
      font-family: Impact, Charcoal, sans-serif;
      font-size: 80px;
      letter-spacing: 4.8px;
      word-spacing: 5px;
      color: white;
      font-weight: 400;
      text-decoration: none solid rgb(68, 68, 68);
      font-style: normal;
      font-variant: normal;
      text-transform: none;
    }
    #error span{
      font-size: 40px !important;
    }
    header{
      width: 100%;
      height: 20%;
    }
    #body-messages{
      padding: 100px;
    }
    #body-messages > #messages {
      background: white;
      padding: 40px;
    }
    #messages > span{
      text-align: center;
      font-size: 30px;
      margin: 10px;
      letter-spacing: 2.8px;
    }
  </style>
</head>
<body>
  <header>
    <div id="error">Error Database </br><span>setup 404<span></div>
      <u style="color:white; font-size: 16px"><?php echo $_SERVER["SERVER_NAME"]; ?></u>
  </header>
  <div id="body-messages">
    <div id="messages">
      <span>
        <?php
        echo "Silahkan duplicate atau copy dan rename file </br>".APPPATH.'config/'.ENVIRONMENT.'\_database.php menjadi '
              .
              "<i style='color:red'>database.php</i>"
              .
              "</br><i style='color:red'>file _database.php</i> tidak perlu dihapus agar tidak mengganggu saat penggunaan git untuk developer</br>";
        ?>
        atau Silahkan hubungi Administator anda :)
      </span>
    </div>
  </div>
  <?php include(APPPATH."views/mini_footer.php");?>
</body>
</html>