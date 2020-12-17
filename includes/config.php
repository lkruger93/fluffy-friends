<?php
// connection string to dev database on localhost
//$conn = mysqli_connect('localhost', 'root', '', 'adoptables');

// connection string to DBClear in Heroku
$server="us-cdbr-east-02.cleardb.com";
$user="b7f08f8246966e";
$pwd="1d79ba2e";
$dbname="heroku_6258c5104eb47f9";

$conn = mysqli_connect($server, $user, $pwd, $dbname);

// check connection was made and display error page if not
if(!$conn){
  header('Location: error.php');       
}
?>