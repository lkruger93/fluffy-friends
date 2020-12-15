<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <?php include("includes/partials/head.php");?>
</head>
<body>
  <?php include("includes/partials/header.php");?>

  <h2 class="opener">Contact us!</h2>
  <h3 class="fun-greeting">Questions about us or our services?  Let us know and we'll get back to you as soon as we can!</h3>
<div class="contact-field">
  <div class="build">
    <form action="contact.php">
      <p>
      <label for="name">Your Name</label>
    <input type="text" id="name" name="name" placeholder="Your name here">
      </p>
      <p>
    <label for="email">Email</label>
    <input type="email" id="email" name="lastname" placeholder="Your email here!">
      <p>
        <p>
          <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
</p>
<p>
    <button>Submit!</button>
        </p>

    </form>
  </div>
  <img src="assets/images/jade.jpg" alt="sad jade" class="description-pic">
  </div>

 <?php include("includes/partials/footer.php");?>

</body>
</html> 