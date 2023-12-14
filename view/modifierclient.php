<?php
session_start();
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
                <a href="location.php">Home</a>
                <a href="#about">About</a>
                <a href="location.php">Gallery</a>
                <a href="logout.php">Log out</a>
                
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

<!-- contact section -->
<section class="contact_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6">
                <div class="form_container">
                    <div class="heading_container ">
                        <h2> update your account</h2>
                    </div>
                    <form action="modifierclient.php" method="post">
                      
                        

                        <div>
                         <input type="text" placeholder="Client Id" name="idC" value='<?php echo $_SESSION['idClient'] ?>' readonly/>
                        </div>

                        <div>
                            <input type="text" placeholder="Fists Name" name="nom"  value='<?php echo $_SESSION['nom'] ?>' />
                        </div>
                        <div>
                            <input type="text" placeholder="Last Name" name="prenom" value='<?php echo $_SESSION['prenom'] ?>'/>
                        </div>
                        <div>
                            <input type="text" placeholder="Phone Number" name="telephone" value='<?php echo $_SESSION['telephone'] ?>'/>
                        </div>
                        <div>
                            <input type="email" placeholder="Email" name="email" value='<?php echo $_SESSION['email'] ?>'/>
                        </div>
                        <div>
                            <input type="text" placeholder="Password" name="password" value='<?php echo $_SESSION['password'] ?>'/>
                        </div>
                        
                        <div class="btn_box">
                            <button type="submit">update</button>
                        </div>
                        
                    </form>

                </div>
                <div >
                           <a href="location.php" style="text-decoration: none;">
                       <button style="background: none; border: none; font-size:22px;margin-left:50px;margin-top:44px;color:white;">&larr; Return</button>
                             </a>
                    </div>
            </div>
            <div class="col-md-5 col-lg-6">
            <?php  
    session_start();
    require_once("../controllers/contratcontroller.php");
    $contratcrl = new ContratController();
    $res = $contratcrl->getContrat($_SESSION['idClient']);
    echo "<style>
    .table {
        width: 100%;
        margin-top: 22px
    }

    

    .th, .td {
        padding: 12px;
        text-align: left;
    }

    .th,.tr {
        background-color: #f2f2f2;
    }

    
</style>
";
    

    
    if ($res) {
        echo "<table class='table'>";
        echo "<tr class='tr'>
        <th class='th'>your ID</th>
        <th class='th'>apartment ID</th>
        <th class='th'>rental time</th></tr>";

        
        foreach ($res as $row) {
          echo "<tr class='tr'>";
          echo "<td class='td'>".$row['idClient']."</td>";
          echo "<td  class='td'>".$row['idapp']."</td>";
          echo "<td  class='td'>".$row['datel']."</td>";
          echo "</tr>";
      }
        echo "</table>";
    } else {
        
        echo "<h2 style='font-size:40px;text-align:left;color: #e03300'>User ID". $_SESSION['idClient']."<br>you dont have any <br>contracts yet</h2>";
    }
?>

            </div>
        </div>
    </div>
</section>
  </div>



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

  <?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    require_once('../controllers/clientcontroller.php');
    require_once('../modele/client.php');

    
    $idClient = $_POST["idC"];  
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $client = new Client($nom, $prenom, $telephone, $email, $password);

    
    $clientctr = new ClientController();
    $res = $clientctr->modifier_user($client, $idClient);
    
    if ($res) {
        echo "<script>alert('Account updated successfully');</script>";
    } else {
        echo "<script>alert('Failed to update account');</script>";
    }
} 
?>

</body>