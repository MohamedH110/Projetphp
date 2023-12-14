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
  <script>function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }</script>
  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />

</head>
<header class="header_section innerpage_header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
        <h2 style="margin-left:120px;
            color: white;
            margin-top: 10px;">Welcome Administrator</h2>

            <div class="custom_menu-btn">
                <button onclick="openNav()">
                    <span class="s-1"> </span>
                    <span class="s-2"> </span>
                    <span class="s-3"> </span>
                </button>
            

            <div id="myNav" class="overlay">
                <div class="overlay-content">
                    <a href="index.php">Home</a>
                    <a href="#client" >Client</a>
                    <a href="#apartment">Apartment</a>
                    <a href="#CONTRACT">Contract</a>
                </div>
            </div>
  </div>
        </nav>
    </div>
</header>

<body>

  <!--- liste des client -->
  <div id="client">
  <?php
  
  include_once('../controllers/clientcontroller.php');
  $ctlr = new ClientController();
  $res = $ctlr->liste();
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
echo "<h2>List of Our Clients</h2>";
    echo "<table border='1'> ";
    echo "<tr> 
            <th>Client ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th colspan='2'>Options</th>
        </tr>";

    while ($l = $res->fetch()) {
        echo "<tr>";
        echo "<td>".$l['idClient']."</td>";
        echo "<td>".$l['nom']."</td>";
        echo "<td>".$l['prenom']."</td>";
        echo "<td>".$l['telephone']."</td>";
        echo "<td>".$l['email']."</td>";
        echo "<td>
        <form action='modifierclient2.php' method='post'>
                <input type='hidden' name='idClient' value='$l[0]'>
                <button style='background-color: #333; color: #fff; width: 120px; height: 50px; border-radius: 5px;' type='submit'>Update</button>
            </form>
        </td>";
        echo "<td>
        <form action='suppclient.php' method='post'>
        <input type='hidden' name='idClient' value='$l[0]'>
        <button style='background-color: #333; color: #fff; width: 120px; height: 50px; border-radius: 5px;' type='submit'>Delete</button>
     </form>
        </td>";
        echo "</tr>";
    }

    echo "</table>";


?>
<div style="padding:80px">
  <a href="ajoutclient2.php">
<button style='background-color: #333; color: #fff; width: 200px; height: 70px; border-radius:5px;margin-left:500px;'>ADD NEW CLIENT</button></a>
</div>
  </div>

  <!--liste des appartements-->
  <div id="apartment">
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
            <th colspan='2'>Options</th>
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
        <form action='modifierapp.php' method='post'>
        <input type='hidden' name='idapp' value='$l[0]'>
        <button style='background-color: #333; color: #fff; width: 120px; height: 50px; border-radius: 5px;' type='submit'>Update</button>
     </form>
        </td>";
        echo "<td>
        <form action='suppapp.php' method='post'>
                <input type='hidden' name='idapp' value=".$l['idapp'].">
                <button style='background-color: #333; color: #fff; width: 120px; height: 50px; border-radius: 5px;' type='submit'>Delete</button>
            </form>
        </td>";
        
        echo "</tr>";
    }

    echo "</table>";
?>
  
   <!-- fin liste appartement-->

   <div style="padding:80px">
  <a href="ajoutappartement.php">
<button style='background-color: #333; color: #fff; width: 200px; height: 70px; border-radius:5px;margin-left:500px;'>ADD NEW APARTMENT</button></a>
</div>
</div>

     <!-- liste des contrats -->
     
    <div id="CONTRACT">

     <?php 
     include_once('../controllers/contratcontroller.php');
    $cclr = new contratController();
    $res = $cclr->liste();
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

    echo "<h2>List of Contracts</h2>";
    echo "<table border='1'> ";
    echo "<tr> 
            <th>ID Client</th>
            <th>Nom Client</th>
            <th>ID APARTMENT</th>
            <th> RENTAL PERIOD</th>
            <th>Options</th>
        </tr>";

    while ($l = $res->fetch()) {
        echo "<tr>";
        echo "<td>".$l['idClient']."</td>";
        echo "<td>".$l['nom']."</td>";

        echo "<td>".$l['idapp']."</td>";
        echo "<td>".$l['datel']."</td>";
        echo "<td>
        <form action='suppcontrat.php' method='post'>
                <input type='hidden' name='idapp' value=".$l['idapp'].">
                <button style='background-color: #333; color: #fff; width: 120px; height: 50px; border-radius: 5px;' type='submit'>cancel</button>
            </form>
        </td>";
        
        echo "</tr>";
    }

    echo "</table>";
?>
<!-- jQery -->
<script src="../js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../js/bootstrap.js"></script>
  <!-- lightbox Gallery-->
  <script src="../js/ekko-lightbox.min.js"></script>
  <!-- custom js -->
  <script src="../js/custom.js"></script>

</body>



<div style="padding:80px">
  <a href="ajoutcontrat2.php">
<button style='background-color: #333; color: #fff; width: 200px; height: 70px; border-radius:5px;margin-left:500px;'>MAKE NEW CONTRACT</button></a>
</div>

  </div>

     <!-- fin listes des contrats -->
  
<!-- jQery -->
<script src="../js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../js/bootstrap.js"></script>
  <!-- lightbox Gallery-->
  <script src="../js/ekko-lightbox.min.js"></script>
  <!-- custom js -->
  <script src="../js/custom.js"></script>