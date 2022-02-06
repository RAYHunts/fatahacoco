<?php
require 'config.php';
?>
<body>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= WEB_NAME; ?> - Ready to Supply and Export Coco Based Raw Materials</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/transition.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.min.css">
    <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script> 
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets\image\apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets\image\apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets\image\apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets\image\apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets\image\apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets\image\apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets\image\apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets\image\apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="assets\image\favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="assets\image\favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="assets\image\favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets\image\favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="assets\image\favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="assets\image\mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="assets\image\mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="assets\image\mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="assets\image\mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="assets\image\mstile-310x310.png" />

</head>
<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="<?= BASEURL; ?>">
            <img src="assets/image/logo.png"  width="100px">
        </a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="<?= BASEURL; ?>">Home</a></li>
        <li><a href="ourProduct">Our Product</a></li>
        <li><a href="aboutUs">About Us</a></li>
      </ul>
      <script type="text/javascript">
      const currentLocation = location.href;
      const menuItem = document.querySelectorAll('a');
      const menuLength = menuItem.length
      for (let i = 0; i<menuLength; i++){
          if(menuItem[i].href === currentLocation){
              menuItem[i].className = "active"
          }
      }
    </script>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  
      <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>

  


  