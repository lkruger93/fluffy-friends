<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create a friend!</title>
  <?php include("includes/partials/head.php");?>
</head>
<body>
   <?php include("includes/partials/header.php");?>
  
    <div class="opener">
      <h2 class="greetings">Create your forever friend</h2>
       <p class="hello">Design your perfect dog and we'll find you the right match!</p>
  </div>
  <div class="big-create">
  <div class="dog">
    <svg width="639" height="442" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M62.5 12.4C63.8-2.5 98 .6 149.5 3c41.3 54.5 62 89.8 125 103 43.4 9.6 69.6 10.8 117 11 43.7-3.9 68-6 86.5 9.5L638 36c-62 70-140.2 100.6-111 128.5 8.5 29.4.7 43.2-15.5 67.5 16.2 32.1 26.2 49.7 72.5 70 12.3 56 17.2 83.7 8 99.5l-30-11 12.5-21C558.2 337 539.3 322 486 302c24.9 28.3 38 44 25.5 67.5-10 26.3-13.7 41.6-42.5 62h-36.5c33.6-20.8 41.8-34.8 45.5-62C446.8 330 420.4 299 418.7 253L325 283l30 118.5-19 39.5h-36.5c9.8-17.4 16.3-25.8 14.5-58.5-15.5-45.9-30.5-71-55.5-93.6-1.4 10-9 11.7-58.5-5.9l-36.5 129.5-31.5 19-38-9.5c36.4-19.7 49-36.4 55.5-77.5 7.3-37.1 10.8-58.3 0-104.5-23.6-35.4-6.5-53.5-17.5-101-27.5-43.1-49.9-60.2-109-71l-7.7-16L1 22a127.7 127.7 0 0061.5-9.5z" fill="#7E21CA"/>
  <path d="M432.5 181.4a183.4 183.4 0 00-13.8 71.5m0 0c1.7 46 28 77 59.3 116.5-3.7 27.2-12 41.2-45.5 62H469c28.8-20.4 32.6-35.7 42.5-62 12.6-23.4-.6-39.2-25.5-67.5 53.3 20 72.2 35 88.5 67.5l-12.5 21 30 11c9.2-15.8 4.3-43.6-8-99.5-46.3-20.3-56.3-37.9-72.5-70 16.2-24.3 24-38.1 15.5-67.5C497.8 136.5 576 106 638 36l-160 90.5c-18.5-15.4-42.8-13.4-86.5-9.5-47.4-.2-73.6-1.4-117-11-63-13.2-83.7-48.5-125-103-51.5-2.3-85.7-5.4-87 9.5-7.2 3.4-21.4 8-37.9 9.5m394 231L325 283m0 0l-36.5-87m36.5 87l30 118.5-19 39.5h-36.5c9.8-17.4 16.3-25.8 14.5-58.5-15.5-45.9-30.5-71-55.5-93.6m-30-23.4c11.5 8 21.3 15.5 30 23.4m0 0c-1.4 10-9 11.7-58.5-5.9l-36.5 129.5-31.5 19-38-9.5c36.4-19.7 49-36.4 55.5-77.5 7.3-37.1 10.8-58.3 0-104.5-23.6-35.4-6.5-53.5-17.5-101-27.5-43.1-49.9-60.2-109-71l-7.7-16M110 36c7 39.7 18.1 55.7 53.5 70 4.3-19 1.8-33.9-14-70M24.6 22c-7.5.8-15.5 1-23.6 0l14.3 30m9.3-30c2.5 17.4.4 23.9-9.3 30M94 22l-14-9.5-9.5 9.5 16 8 7.5-8z" stroke="#000"/>
</svg>
</div>
<div class="build">
<form action="displaydogs.php">
       <fieldset>
          <legend>Build your dog!</legend>
          <p>
             <label for="dogAge">Age</label>
             <select name="dogAge" id = "dogAge">
               <option value = "any">Any</option>
               <option value = "puppy">Puppy</option>
               <option value = "1-4 years">1-4 years</option>
               <option value = "5-8 years">5-8 years</option>
               <option value = "9+ years">9+ years</option>
             </select>
             </p>
             <p>
             <label for="colour">Colour</label>
             <select name="colour" id="colour">
               <option value="any">Any</option>
               <option class="brown" value="brown">Brown</option>
               <option class="black" value="black">Black</option>
               <option class="white" value="white">White</option>
             </select>
             </p>
             <p>
             <label for="size">Size</label>
             <select name="size" id="size">
               <option value="any">Any</option>
               <option value="small">Small</option>
               <option value="medium">Medium</option>
               <option value="large">Large</option>
             </select>
             </p>
             <p>
             <label for="temper">Temperament</label>
             <select name="temper" id="temper">
               <option value="any">Any</option>
               <option value="couch potato">Couch potato</option>
               <option value="high energy">High energy</option>
               <option value="playful">Playful</option>
             </select>
          </p>
          <button>Find my dog!</button>
       </fieldset>
    </form>
  </div>
  </div>
   <?php include("includes/partials/footer.php");?>

</body>
</html>