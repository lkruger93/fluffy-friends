<?php 
// connection string to be in config file
$conn = mysqli_connect('us-cdbr-east-02.cleardb.com', 'b7f08f8246966e', '1d79ba2e', 'heroku_6258c5104eb47f9');
                                                                                                                   
// check connection was made and display error page if not
if(!$conn){
  header('Location: error.php');       
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Our DOGS</title>
  <?php include("includes/partials/head.php");?>
</head>
<body>
  <?php include("includes/partials/header.php");?>
  

<?php

// Execute retrieval to fetch all dogs requested

  $sql = "SELECT * FROM dogstest";

// get the result set (set of rows)
$results = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$selectdogs = mysqli_fetch_all($results, MYSQLI_ASSOC);

?>


<h2 class="opener">View all of our available dogs!</h2>
<div class="list">
<?php foreach($selectdogs as $dogslist): ?>
  
  <div class="profile">
    <img class="profile-pic" src="<?php echo $dogslist['image']?>" width="100%" alt="Picture of a Cute Dog"/>
  
   <h2 class="dog-name"><?php echo $dogslist['name']?></h2>
   <ul class="description">
    <li>Colour: <?php echo $dogslist['colour']?></li>
   <li>Size: <?php echo $dogslist['size']?></li>
   <li>Age: <?php echo $dogslist['age']?> years old</li>
   <li>Gender: <?php echo $dogslist['gender']?></li>
   <li>Temperament: <?php echo $dogslist['temperament']?></li>
   
   </ul>
   </div>
  

<?php endforeach; ?>
 </div>
<?php 
// free the $result from memory (good practise)
mysqli_free_result($results);

// close connection
mysqli_close($conn);
?>

<?php include("includes/partials/footer.php");?>

</body>
</html>