<?php 

?>
<html>


<head>
  <!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/css?family=Acme|Fjalla+One&display=swap" rel="stylesheet"> 
  <!-- css linking -->
  <link rel="stylesheet" href="style/costom.css">
  <link type="text/css" rel="stylesheet" href="css/main.css" />
<title>monmacks </title>
  <style>
      body{
        background:rgb(245, 240, 240)
      }
      .logo-image{
        width: 70px;
        height: 50px;
        vertical-align: middle;
       margin-left: 50px
      }
      .page-footer{
        background: rgb(85, 77, 77);
      }
      .about{
          min-height: 100px;
      }
.jab{
    color: blue;
}
     
  </style>
</head>

<body id="home" class="scrollspy">
  <div class="navbar-fixed">
    <nav class="blue">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo center-on-small-screen" ><img class="logo-image" src="img/logo.gif" alt=""></a>
          <a href="#" data-activates="mobile-nav" class="button-collapse">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="about.html">About</a>
            </li>
            <li><a href="https://web.facebook.com/pg/monmacks/photos/?tab=album&album_id=689242687811351" class="tooltipped btn-floating btn-small blue darken-4 center" data-position="bottom" data-tooltip="Facebook">
                <i class="fab fa-facebook"></i>
              </a></li>
              <li><a href="#" class="tooltipped btn-floating btn-small blue darken-4 center" data-position="bottom" data-tooltip="Twitter">
                <i class="fab fa-twitter"></i>
              </a></li>
            
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="side-nav" id="mobile-nav" id="slide-out">
    <li>
      <a class="sidenav-close" href="index.html">Home</a>
    </li>
    <li>
      <a class="sidenav-close" href="about.html">About</a>
    </li>
    <li><a href="https://web.facebook.com/pg/monmacks/photos/?tab=album&album_id=689242687811351" class="tooltipped btn-floating btn-small blue darken-4 center" data-position="bottom" data-tooltip="Facebook">
        <i class="fab fa-facebook"></i>
      </a></li>
      <li><a href="#" class="tooltipped btn-floating btn-small blue darken-4 center" data-position="bottom" data-tooltip="Twitter">
        <i class="fab fa-twitter"></i>
      </a></li>
  </ul>
  <br>

  <div class="container about">
  <ul id="tabs-swipe-demo" class="tabs center">
    <li class="tab col s3 "><a href="#test-swipe-1" class="text-blue">About us</a></li>
    <li class="tab col s3 "><a class="active" href="#test-swipe-2">our vision</a></li>
    <li class="tab col s3 "><a href="#test-swipe-3">our mission</a></li>
  </ul>
  <div id="test-swipe-1" class="col s12 ">
      <p>
        Monmacks Creations and Supplies Ltd is an advertising and general supplies company operating in Kenya with its base established in Nairobi, Kenya 2014, objectively to provide specialized and unique innovative concepts, design, promo, maintenance services in advertising and marketing sectors among others. 
        With local incorporation in Nairobi, the company has amongst its key personnel: Qualified marketing executives , Business Consultants, Creative media Consultants, Graphic Designer with distinguished experience and a strong team. 
        MCS Ltd relies heavily on creativity in design and new unique concepts which have immensely aided in building of local contacts. The company intends to spend 25% of its annual operating expenses on capital innovation, Development, executive training, customer care and ICT. 
        Our focus is on strategic advertising development, corporate and non-corporate branding, installation and maintenance of all types of indoor and outdoor signage and promotional materials. 
        Our fundamental objective is to deliver a highly visible and visually attractive image of our esteemed customers’ products and services through creative artistic impression and strategic positioning
      </p>
  </div>
  <div id="test-swipe-2" class="col s12">
      <br>
      <br>
      <br>
    <p class ="center">To be a leading supplier and solution provider in advertising, Branding, publishing and printing
        <br> for corporate and non-corporate Organizations in Kenya and East Africa at large</p>
    </div>
  <div id="test-swipe-3" class="col s12 ">
      <br>
      <br><br>
      
    <p>To provide quality printing and branding solutions and other related business services following strict adherence to ethical and moral values while being dedicated in performing our duties 
        fostering an environment of continuous improvement and to ensure strong working relations</p></div>
  </div>

   <div class="container">
        <h4 class ="center">Our core values</h4>
        <ul class="collection">
            <li class="collection-item">Integrity</li>
            <li class="collection-item">Innovation</li>
            <li class="collection-item">Team work</li>
            <li class="collection-item">Excellence </li>
          </ul>
   </div>
   <br>



  <footer class="page-footer">
    <div class="container">
      <div class="row">
       <h5>Location</h5>
          <p>PAWA 254</p>
          <p>state house crescent <br>
            off state house road</p>
          
          <p>monmackscreations.supplies@gmail.com</p>
          <p>Whatsapp/ Text/ Call: 0732 336477</p>
      </div>
    </div>
    <div class="footer-copyright blue-grey darken-4">
      <div class="container">
     &copy 2019 all right reserved <br> Monmacks 
        
        <a class="grey-text text-lighten-4 right" href="#home">
          <i class="material-icons left">keyboard_arrow_up</i> Back To Top
        </a>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      // Init Side nav
      $('.button-collapse').sideNav();
     
    });
  </script>
</body>

</html>



