<?php require_once "head.php"; ?>

<head>
  <?php require_once "head.php"; ?>
  <style>
    /* (Insert the CSS here) */
    /* Target the images inside the "why-us" section */
.why-us img {
  width: 100%;
  max-width: 100%;
  height: auto;
  border-radius: 15px; /* Rounded corners */
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.why-us img:hover {
  transform: scale(1.05); /* Zoom-in effect on hover */
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
}

  </style>
</head>

 <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why choose game School?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Unity Game Engine</a></li>
              <li><a href='#tabs-2'>Unreal</a></li>
              <li><a href='#tabs-3'>Play Games</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose 01.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>🎮 Unity Game Engine</h4>
                    <p>Language: Uses C#, a popular and simple programming language.

2D & 3D Games: Supports both types, very popular for mobile and indie games. FOR MORE INFO<a href="">click here</a></p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>🎮 Unreal Engine</h4>
                    <p>Language: Uses C++, good for advanced developers.Real-Time Rendering: Used in films, architecture, and virtual production..FOR MORE INFO<a href="https://www.unrealengine.com/en-US">click here</a></p> 
                    
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <a href="https://www.crazygames.com/"><h4>Play Games</h4></a>
                   <a href="https://www.crazygames.com/"><p>"Playing online games can help relax your mind, allowing you to better focus
                       and absorb concepts when learning game development</p></a>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>  
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
   

<?php require_once "footer.php"; ?>