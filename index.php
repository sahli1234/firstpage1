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
  
  <title>Hello Bau GmbH</title>

  <!--BOOTSTRAP-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/font-awesome/css/all.css" rel="stylesheet" type="text/css">


  <!--CSS-->
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/slick.css" rel="stylesheet" type="text/css">
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
      <div class="carousel">
        <div class="slider-responsive">
          <div class="slick-content">
            <img src="img/interior1.jpg" class="w-100" alt="">
            <div class="slick-title">
              <h5>Private</h5>
              <h2>Modern Architecture</h2>
              <h4>New York, USA</h4>
              <h4>Aug 2019</h4>
              <span><a href="projectdetail.html"><i class="fas fa-chevron-right"></i></a></span>
            </div>
          </div>
          <div class="slick-content">
            <img src="img/interior2.jpg" class="w-100" alt="">
            <div class="slick-title">
              <h5>Hotel</h5>
              <h2>Aesthetic Beach House</h2>
              <h4>Munich, Germany</h4>
              <h4>Jul 2019</h4>
              <span><a href="projectdetail.html"><i class="fas fa-chevron-right"></i></a></span>
            </div>
          </div>
          <div class="slick-content">
            <img src="img/interior3.jpg" class="w-100" alt="">
            <div class="slick-title">
              <h5>Office</h5>
              <h2>Mid Century Modern</h2>
              <h4>London, UK</h4>
              <h4>Jun 2019</h4>
              <span><a href="projectdetail.html"><i class="fas fa-chevron-right"></i></a></span>
            </div>
          </div>
        </div>
        <div class="arrows">
          <div class="prev float-left"><i class="fas fa-chevron-left"></i></div>
          <div class="next float-right"><i class="fas fa-chevron-right"></i></div>
        </div>
        <div class="slider-progress">
          <div class="progress"></div>
        </div>  
      </div>
      <section id="projects" class="pt-4">
        <div class="masonry">
          <div class="item" data-aos="fade-up">
            <a href="galery.php">
              <img src="img/interior5.jpg" alt="">
              <div class="category"><h3>Galery</h3></div>
              <div class="wrap">
                <div class="text">
                  <h5>View Galery</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="guide" data-aos="zoom-in">
          <a href="projects.html"><h4>View All Projects</h4></a>
        </div>
      </section>
      <section id="quote" class="container-fluid pb-5">
        <div class="row pt-5 mb-5">
          <div class="col-lg-5 col-md-5 title" data-aos="fade-right">
            <h1><b>We do more than just design, we do <span class="special">ART</span></b></h1>
          </div>
          <div class="col-lg-7 col-md-7 content" data-aos="fade-left">
            <h2><b>We are a team of Interior Designer</b></h2>
            <h4><b>We transform your ordinary place into your dream place</b></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div> 
        </div>
      </section>
      <section id="service" class="container-fluid pt-5 pb-5">
        <h5 class="text-center pt-5" data-aos="fade-up" data-aos-duration="500"><b>THE EXPERTISE</b></h5>
        <h2 class="text-center pb-2 heading" data-aos="fade-up" data-aos-duration="700"><b>OUR SERVICES</b></h2>
        <br>
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 service mb-5" data-aos="fade-down">
            <h2 class="text-center">Residential Design</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="w-100">
              <img src="img/services1.jpg" alt="">
            </div>
            <a href="service.html#residential" class="mt-2 btn-hollow">Read More</a>
          </div>
          <div class="col-lg-4 col-md-6 service mb-5" data-aos="fade-up">
            <h2 class="text-center">Hospitality Design</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="w-100">
              <img src="img/services1.jpg" alt="">
            </div>
            <a href="service.html#hospitality" class="mt-2 btn-hollow">Read More</a>
          </div>
          <div class="col-lg-4 col-md-6 service mb-5" data-aos="fade-down">
            <h2 class="text-center">Commercial Design</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="w-100">
              <img src="img/services1.jpg" alt="">
            </div>
            <a href="service.html#commercial" class="mt-2 btn-hollow">Read More</a>
          </div>
        </div>
      </section>
      <section id="reasons" class="container-fluid pt-5 pb-5">
        <h5 class="text-center pt-5" data-aos="fade-up" data-aos-duration="500"><b>THE REASONS</b></h5>
        <h2 class="text-center pb-2 heading" data-aos="fade-up" data-aos-duration="700"><b>WHY CHOOSE US</b></h2>
        <br>
        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-6 col-sm-6 reason text-center mb-5" data-aos="fade-right">
            <i class="fas fa-paint-brush fa-3x mb-3"></i>
            <h4 class="text-uppercase">Interior Expertise</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 reason text-center mb-5" data-aos="fade-up">
            <i class="fas fa-trophy fa-3x mb-3"></i>
            <h4 class="text-uppercase">Awards Winning</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 reason text-center mb-5" data-aos="fade-down">
            <i class="fas fa-comments fa-3x mb-3"></i>
            <h4 class="text-uppercase">Free Consultation</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 reason text-center mb-5" data-aos="fade-left">
            <i class="fas fa-recycle fa-3x mb-3"></i>
            <h4 class="text-uppercase">Guaranteed Works</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </section>
      <section id="process" class="container-fluid pt-5 pb-5">
          <h5 class="text-center pt-5" data-aos="fade-up" data-aos-duration="500"><b>THE PROCESS</b></h5>
        <h2 class="text-center pb-2 heading" data-aos="fade-up" data-aos-duration="700"><b>HOW WE DO THINGS</b></h2>
          <br>
          <div class="row mb-5">
            <div class="col-lg-12">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" data-aos="zoom-in" data-aos-duration="300">
                  <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true"><span>Step 1</span><br><span>The Meeting</span></a>
                </li>
                <li class="nav-item" data-aos="zoom-in" data-aos-duration="500">
                  <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">
                    <span>Step 2</span><br><span>Idea & Concept</span></a>
                </li>
                <li class="nav-item" data-aos="zoom-in" data-aos-duration="700">
                  <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">
                  <span>Step 3</span><br><span>Design & Create</span></a>
                </li>
                <li class="nav-item" data-aos="zoom-in" data-aos-duration="900">
                  <a class="nav-link" id="fourth-tab" data-toggle="tab" href="#fourth" role="tab" aria-controls="fourth" aria-selected="false">
                    <span>Step 4</span><br><span>Build & Install</span></a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent" data-aos="fade-up">
                <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                  <br>
                  <h2>Step 1: The Meeting</h2>
                  <p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                </div>
                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                  <br>
                  <h2>Step 2: Idea & Concept</h2>
                  <p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                </div>
                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                  <br>
                  <h2>Step 3: Design & Create</h2>
                  <p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                </div>
                <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                  <br>
                  <h2>Step 4: Build & Install</h2>
                  <p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                </div>
              </div>
            </div>
          </div> 
      </section>
   <!--    <footer class="container-fluid pt-5">
        <div class="row">
          <div class="col-lg-6 col-md-6 news" data-aos="fade-up" data-aos-duration="500">
            <h3>Latest News</h3>
            <ul>
                <li><a href="#">29/01/2019 - Lorem ipsum dolor sit amet Lorem ipsum dolor</a></li>
                <li><a href="#">28/01/2019 - Lorem ipsum dolor sit amet Lorem ipsum dolor</a></li>
                <li><a href="#">27/01/2019 - Lorem ipsum dolor sit amet Lorem ipsum dolor</a></li>
                <li><a href="#">26/01/2019 - Lorem ipsum dolor sit amet Lorem ipsum dolor</a></li>
                <li><a href="#">25/01/2019 - Lorem ipsum dolor sit amet Lorem ipsum dolor</a></li>
                <li><a href="#">24/01/2019 - Lorem ipsum dolor sit amet Lorem ipsum dolor</a></li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="750">
            <h3>Contact Us</h3>
            <ul>
                <li>Michael-Brückner-Str. 2, 12439 Berlin, Germany</li>
                <li><span>Phone: </span></li>
                <li><span>Fax: </span></li>
                <li><span>Email: </span></li>
                <li>News 5</li>
            </ul>
          </div>
        </div>
      </footer>
      <div class="copy text-center pt-4 pb-3"  data-aos="fade-up" data-aos-offset="0">
        <h6>© Copyright 2019 - Andre Renaldo</h6>
      </div>
  </div> -->

  <?php 
    include('footer.php');
?>

  <!--JAVASCRIPT-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/navigation.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      var time = 5;
      var tick, percentTime, isPause; 
      $('.slider-responsive').slick({
        draggable:true,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1200,
        arrows:false,
        autoplay: false,
        touchTreshold:100,
      });
      function startProgressbar() {
        resetProgressbar();
        percentTime = 100;
        isPause = false;
        tick = setInterval(interval, 15);
      }
      function interval(){
        if(isPause===false){
          percentTime -= 1 / (time - 0.1);
          $('.slider-progress .progress').css({
            width: percentTime + "%"
          });
          if (percentTime < 0) {
            $('.slider-responsive').slick('slickNext');
            startProgressbar();
          }
        }
      }
      function resetProgressbar() {
        $('.slider-progress .progress').css({width: 100 + '%'});
        clearTimeout(tick);
      }
      startProgressbar();
      $('.prev').click(function(){
        $('.slider-responsive').slick('slickPrev');
        startProgressbar();
      });
      $('.next').click(function(){
        $('.slider-responsive').slick('slickNext');
        startProgressbar();
      });
    });
    $(function(){
      AOS.init({
        once:true
      });
    });
  </script>
</body>

</html>
