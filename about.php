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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-image.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We are the best anime manga book sellers all over the world and we are the best all over the time. We sell 24/7 and our support team is ready to solve any of your quiries and doubts.</p>
         <p>We are proudly announcing that anime community is trying to collaborate with us to launch their new hyped collections like BORUTO and CHAINSAWMAN anime manga books. Grab the offer to get 100% off on first 1000 buyers!!!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Best manga book collection I ever buyed for and fair value for money and good service to guide you how to start reading as a beginner.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Pavan Nani</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Service and product quality is at it's best and the main thing I love is their packaging, which is covered with atmost care and value.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Rishi_ITACHI</h3>
      </div>

      <div class="box">
         <img src="images/pic3.png" alt="">
         <p>As a anime fan I never tried reading manga books as they have lot of spoilers. But after buying a book from here, now I became manga fan.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Portgas_D_ACE</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I maintain anime channel with lot of anime content.these books helped me for new posts before they release and keep's updated.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vinay_Animex</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>I recommend this as the best anime book sellers,these book page quality is so good and I was trying to buy attack on titan manga this time.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sarada_Uchiha</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>book quality, content, updates, support and all over it's a complete packed website to start for a anime fan like me. let's have it a try.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mr.NarutoKun</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Our Anime Content Team</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Srikanth krishna</h3>
      </div>

      <div class="box">
         <img src="images/author2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john evans</h3>
      </div>

      <div class="box">
         <img src="images/author3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Saritha </h3>
      </div>

      <div class="box">
         <img src="images/author4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Crative_x</h3>
      </div>

      <div class="box">
         <img src="images/author5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Venkat</h3>
      </div>

      <div class="box">
         <img src="images/author6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sraddha</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>