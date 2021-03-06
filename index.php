<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jesus Movement</title>
  <!-- *Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- *CSS-->
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://kit.fontawesome.com/50451a9c34.js" crossorigin="anonymous"></script>
  <!-- *Javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>

  <!-- *Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto&family=Ubuntu&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Amita&family=Bad+Script&family=Calligraffitti&family=Caveat&family=Clicker+Script&family=Courgette&family=Covered+By+Your+Grace&family=Damion&family=Dancing+Script&family=Delius&family=Gloria+Hallelujah&family=Gochi+Hand&family=Great+Vibes&family=Kalam&family=Merienda&family=Merriweather&family=Montserrat&family=Nothing+You+Could+Do&family=Open+Sans&family=Oswald&family=Oxygen&family=Pangolin&family=Patrick+Hand&family=Redressed&family=Roboto&family=Sacramento&family=Satisfy&family=Shadows+Into+Light&family=Stalemate&family=Tillana&display=swap"
    rel="stylesheet">
  <!-- *Favicon -->
  <link rel="icon" href="favicon.ico" />
</head>

<body>
  <?php
  include "about.php";
  ?>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up fa-2x"></i></button>

  <!-- !Title -->
  <section class="colored-section" id="title">
    <div class="container-fluid">
      <!-- *BOOTSTRAP Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Jesus Movement</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Media</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="gallery.php">Gallery</a>
                <a class="dropdown-item" href="videos.php">Video Library</a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="events.php">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonials.php">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <!-- <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
          </ul>
          <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form> -->
        </div>
      </nav>
      <!-- *Title Heading and Image Bootstrap Grid-->
      <div class="row">
        <div class="col-lg-6">
          <h1 class="big-heading">The Jesus people are here.</h1>
        </div>
        <div class="col-lg-6">
          <img class="title-image" src="images/titleimg.png" alt="jesus-image">
        </div>
      </div>
    </div>
  </section>

  <!--!Bootstrap Grid Group Features -->
  <section class="white-section" id="features">
    <div class="container-fluid">
      <div class="row">

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-seedling fa-4x"></i>
          <h3 class="feature-title"><?php echo $groupTxt1; ?></h3>
          <p><?php echo $groupCaption1; ?></p>
        </div>
        <div class="feature-box col-lg-4">
          <i class="icon fas fa-heart fa-4x"></i>
          <h3 class="feature-title"><?php echo $groupTxt2; ?></h3>
          <p><?php echo $groupCaption2; ?></p>
        </div>
        <div class="feature-box col-lg-4">
          <i class="icon fas fa-hands-helping fa-4x"></i>
          <h3 class="feature-title"><?php echo $groupTxt3; ?></h3>
          <p><?php echo $groupCaption3; ?></p>
        </div>
      </div>
    </div>
  </section>
  
  <!--!Call to Action Quote -->
  <section class="colored-section container-fluid" id="cta">
    <h3 class="cta-heading">
      "You are the light of the world. A city set on a hill cannot be hidden. Nor do people light a lamp and put it under a basket, but on a stand, and it gives light to all in the house. In the same way, let your light shine before others, so that they may see your good works and give glory to your Father who is in heaven.???
              
  </h3>

    <h2 class="sml-heading"> Matthew 5:14-16</h2>
  </section>
  <!-- !Footer -->
  <footer class="white-section" id="footer">
    <a href="https://www.facebook.com/JMMinistriesOfficial" target="blank"> <i
        class=" social-icon fab fa-facebook-f "></i></a>
    <a href="https://twitter.com/tjesusmovement?lang=en" target="blank"> <i
        class=" social-icon fab fa-twitter "></i></a>
    <a href="https://www.instagram.com/jesus_movement" target="blank"> <i
        class=" social-icon fab fa-instagram "></i></a>
    <a href="mailto:jesusmovement2021CIC@gmail.com"> <i class=" social-icon fas fa-envelope "></i></a>
    <p class=" copy-foot1">??Copyright 2021 Jesus Movement</p>
    <p class="copy-foot2">Gatchi @ College of the Immaculate Conception</p>
  </footer>

  <script>
    // JS for Back to top button
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 700px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };


    //PAGE HEIGHT WHEN THE BUTTON APPEARS IS SET AT 500px
    function scrollFunction() {
      if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>

</html>