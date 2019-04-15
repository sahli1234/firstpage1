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
  
  <title>Hello Bau GmbH Projects</title>

  <!--BOOTSTRAP-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/font-awesome/css/all.css" rel="stylesheet" type="text/css">


  <!--CSS-->
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
        <h1>All <span class="art">Projects</span></h1>
        <div aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Main</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Projects</li>
          </ol>
        </div>
      </section>
      <section class="container-fluid pt-5">
        <div class="projects-controller">
          <ul class="nav nav-tabs justify-content-center" id="filters" role="tablist">
            <li class="nav-item" data-aos="zoom-in" data-aos-duration="300">
              <a class="nav-link active" data-toggle="tab" href="#" data-filter="*"><h4>All</h4></a>
            </li>
            <li class="nav-item" data-aos="zoom-in" data-aos-duration="300">
              <a class="nav-link" data-toggle="tab" href="#" data-filter=".hotel"><h4>Hotel</h4></a>
            </li>
            <li class="nav-item" data-aos="zoom-in" data-aos-duration="500">
              <a class="nav-link" data-toggle="tab" href="#" data-filter=".home"><h4>Home</h4></a>
            </li>
            <li class="nav-item" data-aos="zoom-in" data-aos-duration="700">
              <a class="nav-link" data-toggle="tab" href="#" data-filter=".kitchen"><h4>Kitchen</h4></a>
            </li>
            <li class="nav-item" data-aos="zoom-in" data-aos-duration="900">
              <a class="nav-link" data-toggle="tab" href="#" data-filter=".office"><h4>Office</h4></a>
            </li>
            <li class="nav-item" data-aos="zoom-in" data-aos-duration="1100">
              <a class="nav-link" data-toggle="tab" href="#" data-filter=".shop"><h4>Shop</h4></a>
            </li>
          </ul>
      </section>
      <section class="container-fluid pt-5">
        <div class="row projects">
          <div class="project col-lg-6 col-md-6 home" data-category="home">
            <a href="projectdetail.html">
              <img src="img/interior1.jpg" alt="">
              <div class="caption"><h4>Project 1</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 kitchen" data-category="kitchen">
            <a href="projectdetail.html">
              <img src="img/interior2.jpg" alt="">
              <div class="caption"><h4>Project 2</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 home" data-category="home">
            <a href="projectdetail.html">
              <img src="img/interior3.jpg" alt="">
              <div class="caption"><h4>Project 3</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 kitchen" data-category="kitchen">
            <a href="projectdetail.html">
              <img src="img/interior4.jpg" alt="">
              <div class="caption"><h4>Project 4</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 hotel" data-category="hotel">
            <a href="projectdetail.html">
              <img src="img/interior5.jpg" alt="">
              <div class="caption"><h4>Project 5</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 kitchen" data-category="kitchen">
            <a href="projectdetail.html">
              <img src="img/interior3.jpg" alt="">
              <div class="caption"><h4>Project 6</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 home" data-category="home">
            <a href="projectdetail.html">
              <img src="img/interior5.jpg" alt="">
              <div class="caption"><h4>Project 7</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 hotel" data-category="hotel">
            <a href="projectdetail.html">
              <img src="img/interior2.jpg" alt="">
              <div class="caption"><h4>Project 8</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 office" data-category="office">
            <a href="projectdetail.html">
              <img src="img/interior3.jpg" alt="">
              <div class="caption"><h4>Project 9</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 office" data-category="office">
            <a href="projectdetail.html">
              <img src="img/interior1.jpg" alt="">
              <div class="caption"><h4>Project 10</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 hotel" data-category="hotel">
            <a href="projectdetail.html">
              <img src="img/interior3.jpg" alt="">
              <div class="caption"><h4>Project 11</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 shop" data-category="shop">
            <a href="projectdetail.html">
              <img src="img/interior2.jpg" alt="">
              <div class="caption"><h4>Project 12</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 home" data-category="home">
            <a href="projectdetail.html">
              <img src="img/interior4.jpg" alt="">
              <div class="caption"><h4>Project 13</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 kitchen" data-category="kitchen">
            <a href="projectdetail.html">
              <img src="img/interior5.jpg" alt="">
              <div class="caption"><h4>Project 14</h4></div>
            </a>
          </div>
          <div class="project col-lg-6 col-md-6 hotel" data-category="hotel">
            <a href="projectdetail.html">
              <img src="img/interior4.jpg" alt="">
              <div class="caption"><h4>Project 15</h4></div>
            </a>
          </div>
        </div>
      </section>
      
    <?php 
    include('footer.php');
?>
  <!--JAVASCRIPT-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/lazy.min.js"></script>
  <script src="js/navigation.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      var $project = $('.projects').isotope({
        itemSelector: '.project',
        layoutMode: 'fitRows',
      });
      // bind filter button click
      $('#filters').on( 'click', 'a', function() {
        var filterValue = $( this ).attr('data-filter');
        $project.isotope({ filter: filterValue });
      });
    });
    $(function() {
        $('.project').lazy();
    });
    $(function(){
      AOS.init({
        once:true
      });
    });
  </script>
</body>

</html>
