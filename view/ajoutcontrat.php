<?php   
session_start();
$idapp=$_POST['idapp'];
?>
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

  <title>Apartments</title>

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

<body>

  <!-- header section strats -->
  <header class="header_section innerpage_header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
       <table><tr>
          <td><img src="../images/app.jpg" width="90px" height="90px"></td>
           
            <td> <?php  echo "<h3 style='color:white; margin-left:50px'>welcome ".$_SESSION["nom"]." ".$_SESSION["prenom"]."</h3>"?> </td>
       
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
                <a href="#about">About</a>
                <a href="index.php">Gallery</a>
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
   <div style="background: url('../images/g6.jpg') no-repeat center center fixed;
      background-size: cover;
      padding: 100px;">
   
  
  <section class="contact_section  " id="cn">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-6 ">
          <div class="form_container">
            <div class="heading_container ">
              <h2>
                Rent new Apartement 
              </h2>
            </div>
            <form action="ajoutcontrat.php" method="post">
              <div>
                <h5>Your ID</h5>
              </div>
              <div>
                <input type="text" placeholder="Client ID" value="<?php echo $_SESSION["idClient"]; ?>" readonly/>
              </div>
              <div>
              <h5> The Apapartment ID</h5>
              </div>
              <div>
              <input type="text" placeholder="Apartment ID" name="idapp" value="<?php echo $idapp; ?>" readonly/>

              </div>
              <div>
                <input type="text" placeholder="Rental period" name="datel"  required/>
              </div>
              
              <div class="btn_box">
                <button type="submit">make</button>
              </div>
            </form>
          </div>
        </div>
        </div>
    </div></section></div>


        <section  id="about" class="about_section layout_padding " >
    <div class="container" >
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="../images/g1.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About apartment renting
              </h2>
            </div>
            <p>
            Discover the ideal living space with our diverse range of apartments available for rent. Whether you're seeking a cozy one-bedroom unit or a spacious family home, our apartments cater to various preferences and needs. Enjoy modern amenities, convenient locations, and a comfortable atmosphere. 
            Find your perfect home and experience the ease and joy of apartment living with us
            </p>
           
            
          </div>
        </div>
      </div>
    </div>
  </section>







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

<?php
include_once('../controllers/contratcontroller.php');
include_once('../modele/contrat.php');



$datel=$_POST['datel'];
if (isset($datel)){


$c=new Contrat($_SESSION["idClient"],$idapp,$datel);
$cctr=new contratcontroller();
$cctr->insert($c);
echo "<script>alert('Apartment rental completed successfully');</script>";

}
?>