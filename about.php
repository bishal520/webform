<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  --->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/veggg.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>TarkariBazar is one of the best agriculture website.
                    that provide valuable agriculture<br> information and a
                    personalized crop calendar for your farm.This farm
                    app leverages the combination of technology and experience to provide crop
                    information which improves the crop yield for each farmer. The app is available in 8 local
                    languages.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <!-- <h1 class="title">client's reviews</h1> -->

   <div class="box-container">

      <div class="box">
         <!-- <img src="images/pic-1.png" alt=""> -->
         <p>Their personal Advisory covers Land preparation,
                    Seed treatment, Crop sowing, Crop planning, Fertilizer calculator and crop
                    nutrition, Pest and disease mangement,Irrigation,Weed treatment and Harvesting.Their personal
                    Advisory covers Land preparation,
                    Seed treatment, Crop sowing, Crop planning, Fertilizer calculator and crop
                    nutrition, Pest and disease mangement,Irrigation,Weed treatment and Harvesting.
                  </p>
         
      </div>     

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>