<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link href=”{{asset('css/app.css') }}” rel=”stylesheet”>
<<<<<<< HEAD
  <meta name=”csrf-token” content=”{{ csrf_token() }}”>
  <link rel="stylesheet" href="../main.css">
=======
  <link rel="stylesheet" href={{assets("../main.css") }}>
>>>>>>> 0b0d0bb906bb55d518a1385e447ce2886449ff82
  <title>Frontend Mentor | Fylo landing page with two column layout</title>

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
  </style>
</head>
<body class="container">
  <!--homesection-->
<section class="home">
  <div class="top">
    <div class="menu">
      <ul id="menu">
        <li><img src="./images/logo.svg" alt=""></li>
        <li>Features</li>
        <li>Term</li>
        <li>SignIn</li>
      </ul>
    </div>
    <div class="content">
      <div class="text">
        <ul class="text">
          <li><h2>All your files in one secure location, accessible anywhere.</h2></li>
          <li><p> Fylo stores your most important files in one secure location. 
  Access them wherever you need, share and collaborate with friends, 
  family, and co-workers.</p></li>
          <li>
            <li><input type="email" name="" id=""></li>
            <li><input type="submit" value="Get Started"></li>
          </li>
        </ul>
      </div>
      <div ><img src="./images/illustration-1.svg" class="illustration" alt="" style="height: 450px; width:550px;"></div>
    </div>
  </div>
</section>

<!--homesection-->
<section class="about">
<div class="curve"><img src="./images/bg-curve-desktop.svg" alt=""></div>
<div class="content">
      <div class="text">
        <ul class="text">
          <li><h2>Stay productive, wherever you are</h2></li>
          <li><p> Never let location be an issue when accessing your files. Fylo has you 
              covered for all of your file storage needs.</p>
            <p> Securely share files and folders with friends, family and colleagues for 
                live collaboration. No email attachments required!</p>
              <p><a href="http://" target="_blank" rel="noopener noreferrer">See how Fylo works <img src="./images/icon-arrow.svg" alt=""></a></p></li>
          <li>
            <div id="testimonial">
                <blockquote>Fylo has improved our team productivity by an order of magnitude. Since 
                   making the switch our team has become a well-oiled collaboration machine.
                </blockquote>
                <h5>Kyle Burton</h5>
                <p>Founder & CEO, Huddle</p>
            </div>
          </li>
        </ul>
      </div>
      <div><img src="./images/illustration-2.svg" class="illustration" alt="" style="height: 450px; width:550px;"></div>
    </div>
</section>

<!--homesection-->
<section class="footer">
  <div class="ftop">
       
  </div>
  <div class="fbottom">
    <div class="mwanzo">
      <ul id="mwanzo">
        <li><img src="./images/logo.svg" alt=""></li>
        <li>Phone: +1-543-123-4567</li>
        <li>example@fylo.com</li>
      </ul>
    </div>
    <div class="kati">
      <ul id="kati">
        <li>About Us</li>
        <li>Jobs</li>
        <li>Press</li>
        <li>Blog</li>
      </ul>
    </div> <div class="mwisho">
      <ul id="mwisho">
        <li>Contact Us</li>
        <li>Terms</li>
        <li>Privacy</li>
      </ul>
    </div>
  </div>
</section>
<!--
  Get early access today

  It only takes a minute to sign up and our free starter tier is extremely generous. 
  If you have any questions, our support team would be happy to help you.

  Get Started For Free-->

  <footer>
    <p class="attribution">
      Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
      Coded by <a href="#">Wanjiru Kariuki</a>.
    </p>
  </footer>

    <!--<script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>-->
    <div id=”app”></div>
    <script src=”{{asset('js/app.js') }}”></script>
</body>
</html>
