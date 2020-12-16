<?php
// connection string to be in config file
$conn = mysqli_connect('localhost', 'root', '', 'adoptables');

// connection string to DBClear in Heroku
//$conn = mysqli_connect('us-cdbr-east-02.cleardb.com', 'b7f08f8246966e', '1d79ba2e', 'heroku_6258c5104eb47f9');

// check connection was made and display error page if not
if(!$conn){
  header('Location: error.php');       
}
?>