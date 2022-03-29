<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE-Event Organizer Website Design </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">
    <img src="images\logo.png" >
    <a href="index.html" class="logo"><span>A</span>ICTE</a>

    <nav class="navbar">
        <a href="index.php">home</a>
        
        <a href="register.php">Sign Up</a>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">


    </div>

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/workshops/w1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/workshops/w2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/workshops/w3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/workshops/w4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/workshops/w5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/workshops/w6.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/workshops/w7.jpg" alt=""></div>

        </div>
    </div>

</section>




<section class="contact" id="contact">

    <h1 class="heading"> <span>Register</span> yourself </h1>
    <a name="Click Me" id="clickme" class="btn btn-primary" href="./modules/hackthonR.php" role="button">Click Me</a>

    <!--
    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="name of workshop">
        </div>
        <textarea name="" placeholder="Description of your problem" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="senda" class="btn">
    </form>
-->
</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> jogeshwari </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> goregaon </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> navi mumbai </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> andheri </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#service"> <i class="fas fa-arrow-right"></i> service </a>
            <a href="#"><i class="fas fa-arrow-right"></i>Activities</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> gallery </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> price </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reivew </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 011‑26131498 </a>
            <a href="#"> <i class="fas fa-phone"></i> 011‑26131498 </a>
            <a href="#"> <i class="fas fa-envelope"></i> 	ms@aicte-india.org </a>
            <a href="#"> <i class="fas fa-envelope"></i> pstoms@aicte-india.org  </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/OfficialAICTE/" target="_blank"> <i class="fab fa-facebook-f" ></i> facebook </a>
            <a href="https://twitter.com/AICTE_INDIA?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>

            <a href="https://www.linkedin.com/company/aicteindia/?originalSubdomain=in" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> created by <span>Boolean Autocrats</span> | all rights reserved </div>

</section>

<!-- footer section ends -->

<!-- theme toggler  -->

<div class="theme-toggler">

    <div class="toggle-btn">
        <i class="fas fa-cog"></i>
    </div>

    <h3>choose color</h3>

    <div class="buttons">
        <div class="theme-btn" style="background: #3867d6;"></div>
        <div class="theme-btn" style="background: #f7b731;"></div>
        <div class="theme-btn" style="background: #ff0033;"></div>
        <div class="theme-btn" style="background: #20bf6b;"></div>
        <div class="theme-btn" style="background: #fa8231;"></div>
        <div class="theme-btn" style="background: #FC427B;"></div>
    </div>

</div>




<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
