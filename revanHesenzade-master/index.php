<!doctype html>
<html lang="en">
  <head>
    <title>Meal &mdash; Free Template for Restaurants by Free-Template.co</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Template by Free-Template.co" />
    <meta name="keywords" content="free template, free bootstrap, free website template" />
    <meta name="author" content="Free-Template.co" />

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">



    <!-- 
    //////////////////////////////////////////////////////

    Free TEMPLATE 
    DESIGNED & DEVELOPED by free-template.co
      
    Website:    https://free-template.co
    Email:      freetemplate.co@gmail.com
    Twitter:    https://twitter.com/Free_Templateco
    Facebook:   https://www.facebook.com/Free.Template.co/

    //////////////////////////////////////////////////////
    -->
  </head>
  <body class="bg-light">

    <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">

    <div class="site-wrap">
      
      

      <header class="site-header">
        <div class="row align-items-center">
          <div class="col-5 col-md-3">
             
          </div>
          <div class="col-2 col-md-6 text-center site-logo-wrap">
            <a href="index.html" class="site-logo">M</a>
          </div>
        
        </div>
       
      </header> <!-- site-header -->
      
      <div class="main-wrap " id="section-home">

        <div class="cover_1 overlay bg-slant-white bg-light">
          <div class="img_bg" style="background-image: url(images/slider-1.jpg);" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10" data-aos="fade-up">
                  <h2 class="heading mb-5">Welcome to Meal, where food speaks with your palate</h2>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .cover_1 -->

        <div class="section bg-white services-section" data-aos="fade-up">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
              <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Other Services</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-m mb-5d-6 col-lg-4" data-aos="fade-up">
                <div class="media feature-icon d-block text-center">
                  <div class="icon">
                    <span class="flaticon-soup"></span>
                  </div>
                  <div class="media-body">
                    <!-- <h3>Quality Cuisine</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --> 
                    <?

                    $servername = "localhost";
                         $username = "root";
                        $password = "123";
                        $db="sdf2";
                           $conn = new mysqli($servername, $username, $password,$db);
                        $query=" SELECT * from ups2";
                        $row= $conn->query($query);
                        while ($netice=mysqli_fetch_assoc($row)) { 

                          ?>

                    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                <div class="media feature-icon d-block text-center">
                  <div class="icon">
                    <span class="flaticon-pancake"></span>
                  </div>
                  <div class="media-body">
                    <h3>Bread &amp; Pancake</h3> 
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> 
                  </div>
                </div>
              </div>


                         <?
                           
                           
                          
                        }
                     
                       

                    ?>
                  </div>
                </div>
              </div>
              
             

              
             
            </div>
          </div>
        </div> <!-- .section -->

 


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.easing.1.3.js"></script>    

    <script src="js/aos.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    <script src="js/main.js"></script>
  </body>
</html>