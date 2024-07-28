<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aambo Momo</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="main.js">

    <!-- custom css fil e link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

<a href="#" class="logo"><i class="fas fa-seedling"></i>Aambo Momo</a>

<nav class="navbar">
    <ul>
        <li><a href="#home">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#service">service</a></li>
        <li><a href="#project">photos</a></li>
        <li><a href="#donate">Details</a></li>
        <li><a href="login.html" target="_parent"><button class="btn">ACCOUNT</button></a></li>
    </ul>
</nav>

<div class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
    
<div class="content">
    <div class="container">
        <video autoplay muted loop id="myVideo">
  <source src="video.mp4" type="video/mp4">
</video>
</div>
    <div class="centered">
            <h1>Shop Right Now!!!</h1>
       <a href="https://thulo.com/product-seo-en-998.html" target="_blank"><button class="btn">SHOP</button></a>
    </div>
    </div>
</div>
    
</section>

<!-- home section ends -->

    <div class="horizontal_line"></div>

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <i class="fas fa-quote-left"></i>ABOUT US<i class="fas fa-quote-right"></i> </h1>

<div class="row">

    <div class="image">
        <img src="ammbologo.JPG" alt="">
    </div>

    <div class="content">
        <h3>"FUEL FOR NEPALI SOULS"</h3>
        <p>Aambo is an Authentic, darjeeling momo which fuels our souls and our mouth with its delicious flavour and also makes our mouth watery.</p>
        <a href="https://www.foodganj.com/viewRestaurant/273" target="_blank"><button class="btn">learn more</button></a>
    </div>

</div>

<div class="box-container">

    <div class="box">
        <i class="fas fa-users"></i>
        <h3>3000+</h3>
        <p>Followers</p>
    </div>

    <div class="box">
        <i class="fas fa-tree"></i>
        <h3>15+</h3>
        <p>Daily Orders</p>
    </div>

    <div class="box">
        <i class="fas fa-paw"></i>
        <h3>1500+</h3>
        <p>Positive Reviews</p>
    </div>

</div>

</section>

<!-- about section ends -->

    <div class="horizontal_line"></div>

<!-- service section starts  -->

<section class="service" id="service">

<h1 class="heading"> <i class="fas fa-quote-left"></i>OUR SERVICES<i class="fas fa-quote-right"></i> </h1>
<br><br><br><br>
    
<div class="box-container">
    <div class="box">
        <i class="fas fa-seedling"></i>
        <h3>Fast Delivery</h3>
        <p>Delivery within 30 minutes inside Kathmandu Valley</p>
    </div>

    <div class="box">
        <i class="fas fa-recycle"></i>
        <h3>Free Delivery</h3>
        <p>Delicious Momos ordered to your home for free!!!!</p>
    </div>

    <div class="box">
        <i class="fas fa-hand-holding-water"></i>
        <h3>Hygienic and Healthy Food</h3>
        <p>We use no added preservatives, artificial colours etc.</p>
    </div>


</div>

</section>

<!-- service section ends -->

    <div class="horizontal_line"></div>

<!-- project section starts  -->

<section class="project" id="project">

<h1 class="heading"> <i class="fas fa-quote-left"></i>PHOTOS<i class="fas fa-quote-right"></i> </h1>

<div class="box-container">

    <div class="box">
        <img src="aambo1.JPG" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

    <div class="box">
        <img src="aambo2.JPG" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

    <div class="box">
        <img src="aambo3.JPG" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

    <div class="box">
        <img src="aambo4.JPG" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

    <div class="box">
        <img src="aambo5.JPG" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

    <div class="box">
        <img src="aambo6.JPG" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

</div>

</section>

<!-- project section ends -->

<!-- post section starts  -->


<!-- post section ends -->

    <div class="horizontal_line"></div>

<!-- footer section starts  -->

<section class="footer">

<div class="box-container">

    <div class="box">
        <a href="#" class="logo"><i class="fas fa-seedling"></i>Aambo Momo</a>
        <p>"Your diet is a bank account. Good food choices are good investments. "</p>
        <p>– Bethenny Frankel</p>
    </div>

    <div class="box">
        <h3 class="share">FIND US HERE</h3>
        <a href="https://www.facebook.com/AamboMomo/" target="_blank"><u>facebook</u></a>
        <a href="https://www.instagram.com/aambomomo/?hl=en" target="_blank"><u>instagram</u></a>
    </div>


</div>

<h1 class="credit">created by <span><a href="team.html" target="_blank">Anwesh Rawat & Team</a></span> | all rights reserved. </h1>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/main.js"></script>
</body>
</html>

