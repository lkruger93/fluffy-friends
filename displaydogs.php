<?php include('includes/config.php');?>

<!DOCTYPE html>
<html>
<head>
  <title>Your results!</title>
  <?php include("includes/partials/head.php");?>
</head>
<body>
  <?php include("includes/partials/header.php");?>

<?php

// Execute retrieval to fetch all dogs requested
if (isset($_GET['dogAge'], $_GET['colour'], $_GET['size'], $_GET['temper']))
{
 //   $id = mysqli_real_escape_string($conn, $_GET['id']);
    $agebracket = mysqli_real_escape_string($conn, $_GET['dogAge']);
    $colour = mysqli_real_escape_string($conn, $_GET['colour']);
    $size = mysqli_real_escape_string($conn, $_GET['size']);
    $temperament = mysqli_real_escape_string($conn, $_GET['temper']);
 
  if($colour == 'any'){$colour = "black', 'brown', 'white";}
  if($size == 'any'){$size = "small', 'medium', 'large";}
  if($agebracket == 'any'){$agebracket = "puppy', '1-4 years', '5-8 years', '9+ years";}
  if($temperament == 'any'){$temperament = "couch potato', 'playful', 'high energy";}

$sql = "SELECT * FROM dogs WHERE colour IN ('$colour') AND 
   temperament IN ('$temperament') AND size IN ('$size') AND 
   `age bracket` IN ('$agebracket')";


// get the result set (set of rows)
$results = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$selectdogs = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>
<div>
<h2 class="opener">
<?php
if (mysqli_num_rows($results) == 0)
  {echo "No Results Found :(";
  }
?>
</h2>


</div>
<div class="list">
<?php foreach($selectdogs as $dogslist): ?>
  
  <div class="profile">
    <img class="profile-pic" src="<?php echo $dogslist['image']?>" width="100%"
        alt="Picture of a Cute Dog"/>
  
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
<h2 class="opener">Not what you were looking for? <a class="go-back" href="create.php">Go back to Create-a-Dog</a> or view <a class="go-back" href="ourdogs.php">all our dogs!</a></h2>
</div>
<?php 
// free the $result from memory (good practice)
mysqli_free_result($results);

// close connection
mysqli_close($conn);
?>

 <?php include("includes/partials/footer.php");?>

</body>
</html>