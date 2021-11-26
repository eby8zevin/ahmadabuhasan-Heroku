<?php include ('config/db.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>UAS WEB 7 - Heroku</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="HerokuPostgreSQL">
  <meta name="author" content="AhmadAbuHasan">

  <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="./assets/img/favicon/site.webmanifest">
</head>
<body>

  <center><font color="red" size="696"><b>C R U D</b></font></center>
  <div align="center">
    <h3>Heroku & PostgreSQL</h3>
      <p><?php
        date_default_timezone_set('Asia/Jakarta');
        echo date('d F Y H:i:s'); 
      ?></p>
  </div>
  
  <?php
  $result = pg_query($con,"SELECT id_data FROM tugas_data");
  while($row=pg_fetch_assoc($result)){
    echo ($row['id_data']);
    echo ($row['nim_data']);
    echo ($row['nama_data']); }
  ?>
 
  <footer align="center">
    <?php echo "<p>Copyright &copy; 1945-" . date("Y") ;?>
    <a href="https://ahmadabuhasan.me">ahmadabuhasan.me</a>
  </footer>

</body>
</html>
