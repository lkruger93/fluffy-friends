<?php
// connection string to be in config file
$conn = mysqli_connect('localhost', 'root', '', 'adoptables');
                                                                                                                   
// check connection was made and display error page if not
if(!$conn){
  header('Location: error.php');       
}
?>