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
      font-size: 50px;
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
      font-size: 30px !important;
    }
    header{
      width: 100%;
      height: 10%;
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
      font-size: 20px;
      margin: 10px;
      letter-spacing: 2.8px;
    }
    table#database, th, td{
      border: 1px solid black;
    }
    div #status-database{
      display: inline-flex;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <header>
    <div id="error">Error Database </br><span>set your database configuration<span></div>
  </header>
  <div id="body-messages">
    <div id="messages">
      <span>
        <?php
        echo "Anda berada di server <i>".$_SERVER['SERVER_NAME']."</i> dengan environmet : <i>".ENVIRONMENT."</i></br>" .
             "1. mohon isi konfigurasi database anda</br>" .
             "2. Isikan di folder <i>".FCPATH."application\config/".ENVIRONMENT."\database.php</i></br>" .
             "<br/><b style='font-size: 20;'>Just Make Sure your connection to server <i style='color:red'>no need create the database on mysql</i></b> :)";
        ?>
      </span>

    <div id="status-database">
      <table id="database">
        <caption style="font-size: 20px;">Status konfigurasi database anda</caption>
        <col style="width: 100px;">
        <col style="width: 200px;">
        <col style="width: 100px;">
        <thead>
          <tr>
            <th>Name</th>
            <th>Current</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Hostname</td>
            <td>: <?php empty($db['default']['hostname'])? print "kosong" : print substr_replace($db['default']['hostname'], "***", -3); ?></td>
            <td>*Required</td>
          </tr>
          <tr>
            <td>Username</td>
            <td>: <?php empty($db['default']['username'])? print "kosong" : print substr_replace($db['default']['username'], "***", -3);?></td>
            <td>*Required</td>
          </tr>
          <tr>
            <td>Database</td>
            <td>: <?php empty($db['default']['database'])? print "kosong" : print substr_replace($db['default']['database'], "***", -3); ?></td>
            <td>*Required</td>
          </tr>
          <tr>
            <td>Password</td>
            <td>: <?php empty($db['default']['password']) ? print "kosong" : print "******"?></td>
            <td>Optional</td>
          </tr>
        </tbody>
      </table>
    </div>

    </div>
  </div>
  <?php include(APPPATH."views/mini_footer.php");?>
</body>
</html>
