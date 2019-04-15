<!DOCTYPE html>
<html lang="en">

<head>
  <!--META TAG-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!--OPEN GRAPH META TAGS-->
  <meta property="fb:app_id" content="">
  <meta property="og:url" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="">

  <!--TWITTER META TAGS-->
  <meta name="twitter:card" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:url" content="">
  <meta name="twitter:image" content="">
  <meta name="twitter:site" content="">
  <meta name="twitter:creator" content="">
  <meta name="twitter:domain" content="">

  <!--CANONICAL URL-->
  <link rel="canonical" href="">

  <!--FAVICON-->
  <link rel="icon" href="img/favicon.png">
  
  <title>Hello Bau GmbH About</title>

  <!--BOOTSTRAP-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/font-awesome/css/all.css" rel="stylesheet" type="text/css">


  <!--CSS-->
  <link href="map/leaflet.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/aos.css" rel="stylesheet" type="text/css">

</head>

<body>
  <div class="menu">
    <div id="menu-burger">
      <span class="first"></span>
      <span class="second"></span>
      <span class="third"></span>
    </div>
  </div>
  <div class="social">
    <a href="#" class="socmed fab fa-facebook uncolor"></a>
    <a href="#" class="socmed fab fa-twitter uncolor"></a>
    <a href="#" class="socmed fab fa-instagram uncolor"></a>
    <a href="#" class="socmed fab fa-pinterest uncolor"></a>
    <a href="#" class="socmed fab fa-youtube uncolor"></a>
  </div>

    <?php 
    include('header.php');
?>

  <div class="wrapper">
      <section class="page-title container-fluid pt-4">
        <h1>Story <span class="art">About Us</span></h1>
        <div aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Main</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
          </ol>
        </div>
      </section>
      <section class="container-fluid pt-5 pb-5">
        <h2 class="text-center">Our Location on Map</h2>
        <div id="map"></div>
        <div class="serv pt-5">
          <h2>About Us</h2>
          <div class="imag-left" data-aos="fade-right">
            <img src="img/aboutus.jpg" alt="">
          </div>
          <p class="text-justify" data-aos="fade-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </section>

    <?php 
    include('footer.php');
?>
  <!--JAVASCRIPT-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script async defer src="map/leaflet.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/navigation.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      var map = L.map('map').setView([51.505, -0.09], 13);

      L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          maxZoom: 18,
          zoomControl:false,
          id: 'mapbox.streets',
          accessToken: 'pk.eyJ1IjoiYW5kcmVuYWxkbyIsImEiOiJjam4wMWRnbjAxZzlsM3FveTQzenpjeTNtIn0.S9wVDXwGMRPPGnGZEWrwOw'
      }).addTo(map);
      map.scrollWheelZoom.disable();
      L.marker([51.5, -0.09]).addTo(map)
          .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
          .openPopup();
    })
    $(function(){
      AOS.init({
        once:true
      });
    });
  </script>
</body>

</html>
