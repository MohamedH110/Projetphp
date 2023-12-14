<?php session_start();?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="../images/favicon.png" type="image/gif" />

  <title>Appartments</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- lightbox Gallery-->
  <link rel="stylesheet" href="../css/ekko-lightbox.css" />

  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />

</head>
<!-- header section strats -->
<header class="header_section innerpage_header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
       <table><tr>
          <td><img src="../images/app.jpg" width="90px" height="90px"></td>
           
            <td> <?php echo "<h3 style='font-size:30px;text-align:left;color:white;'>welcome " .$_SESSION["nom"] ." ".$_SESSION["prenom"] ."</h3>"?></td>
       
        <td><div class="" id="">

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="#gallery">Gallery</a>
                <a href="#service">Service</a>
                <a href="modifierclient.php">Account</a>
                <a href="logout.php">Logout</a>
                
              </div>
            </div>
          </div>
        </div></td></tr></table>
      </nav>
    </div>
  </header>
  <!-- end header section -->
  <!-- slider section -->
  <section class="slider_section position-relative">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="img_container">
            <div class="img-box">
              <img src="../images/slider-bg.jpg" class="" alt="...">
            </div>
          </div>
        </div>
        
        <div class="carousel-item">
          <div class="img_container">
            <div class="img-box">
              <img src="../images/slider-bg.jpg" class="" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn_box">
        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="detail-box">
      <div class="col-md-8 col-lg-6 mx-auto">
        <div class="inner_detail-box">
          <h1>
            Discover Your New Home
          </h1>
          <p>
            Welcome to our agency, where finding your dream apartment becomes a seamless 
            and enjoyable experience! As a premier apartment agency, we take pride in connecting 
            you with the perfect living space that complements your lifestyle and preferences
          </p>
          
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->


  <!-- service section -->

  <section class="service_section layout_padding" id="service">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Service
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="../images/s1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Appartment renting
              </h5>
              <p>
                Choose from our strategically located service apartments, offering easy access to key business districts, entertainment hubs, and transportation networks. Enjoy the convenience of being close
                 to the action while having a peaceful retreat to return to at the end of the day.
              </p>
             
            </div>
          </div>
        </div>
       
        

  </section>

<!-- gallery section -->

<div class="gallery_section layout_padding2" id="gallery">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2>
          Gallery
        </h2>
      </div>
      <div class="row">
        <div class=" col-sm-8 col-md-6 px-0">
          <div class="img-box">
            <img src="../images/g1.jpg" alt="">
            <a href="../images/g1.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0">
          <div class="img-box">
            <img src="../images/g2.jpg" alt="">
            <a href="../images/g2.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0">
          <div class="img-box">
            <img src="../images/g3.jpg" alt="">
            <a href="../images/g3.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0">
          <div class="img-box">
            <img src="../images/g4.jpg" alt="">
            <a href="../images/g4.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0">
          <div class="img-box">
            <img src="../images/g5.jpg" alt="">
            <a href="../images/g5.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-8 col-md-6 px-0">
          <div class="img-box">
            <img src="../images/g6.jpg" alt="">
            <a href="../images/g6.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        
      </div>
    </div>
  </div>

  <!-- end gallery section -->

<!--liste des appartements-->
<?php 
     include_once('../controllers/appartementcontroller.php');
    $appclr = new appartementController();
    $res = $appclr->liste();
    echo "<style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }

            table {
                width: 80%;
                margin: 20px auto;
                border-collapse: collapse;
               
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            }

            th, td {
                padding: 15px;
                text-align: left;
                
            }

            th {
                background-color: #333;
                color: #fff;
            }


            h2 {
                text-align: center;
                margin-top: 30px;
                color: #333;
            }
        </style>";

    echo "<h2>List of Our Apartments</h2>";
    echo "<table border='1'> ";
    echo "<tr> 
            <th>Apartment ID</th>
            <th>Rental price</th>
            <th>Surface</th>
            <th>type</th>
            <th>condition</th>
            <th>Address</th>
            <th>option</th>
            
        </tr>";

    while ($l = $res->fetch()) {
        echo "<tr>";
        echo "<td>".$l['idapp']."</td>";
        echo "<td>".$l['prixlocation']."</td>";
        echo "<td>".$l['superficie']."</td>";
        echo "<td>".$l['type']."</td>";
        echo "<td>".$l['etat']."</td>";
        echo "<td>".$l['adresse']."</td>";
        echo "<td>
        <form action='ajoutcontrat.php' method='post'>
                <input type='hidden' name='idapp' value=".$l['idapp'].">
                <button style='background-color: #333; color: #fff; width: 120px; height: 50px; border-radius: 5px;' type='submit'>RENT</button>
            </form>
        </td>";
        
        echo "</tr>";
    }

    echo "</table>";
?>
   <!-- fin liste appartement-->


   <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row info_main_row">
        <div class="col-md-6 col-lg-3">
          <div class="info_insta">
            <h4>
              
                <span>
                  Privacy Policy and Terms of Service
                </span>
              </a>
            </h4>
            <p class="mb-0">
              We collect personal information provided by users, such as names, contact details, and preferences, to facilitate our services.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_detail">
            <h4>
              Company
            </h4>
            <p class="mb-0">
              Whether you're a first-time renter, a relocating professional, or someone seeking a temporary living solution,our Agency is your trusted 
              partner in the search for the perfect apartment.
               
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <h4>
            Contact Us
          </h4>
          <div class="info_contact">
            
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
                <br>
            
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call +01 1234567890
              </span>
            
            
              <i class="fa fa-envelope"></i>
              <span>
                demo@gmail.com
              </span>
            
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <h4>
            Follow Us
          </h4>
          <div class="social_box">
            <a >
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a>
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a >
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a>
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


 


  <!-- jQery -->
  <script src="../js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../js/bootstrap.js"></script>
  <!-- lightbox Gallery-->
  <script src="../js/ekko-lightbox.min.js"></script>
  <!-- custom js -->
  <script src="../js/custom.js"></script>

</body>

</html>