<?php
session_start();
try {
    $pdo=new PDO('mysql:host=localhost;dbname=agenceapp','root','');
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $enteredemail = $_POST["email"];
        $enteredPassword = $_POST["password"];

        if($enteredemail=='user@admin' && $enteredPassword=='admin123'){
          header("Location:admin.php");
          exit();
        }else{

        
        $query = "SELECT * FROM client WHERE email = :email LIMIT 1";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':email', $enteredemail);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        if ($row) {

            if ($enteredPassword == $row["password"]) {
                
                $_SESSION["idClient"] = $row["idClient"]; 
                $_SESSION["nom"] = $row["nom"];
                $_SESSION["prenom"] = $row["prenom"];
                $_SESSION["telephone"]=$row["telephone"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["password"] = $row["password"];
                
                header("Location: location.php");
                exit();
            
            }
        } else {
            
            $_SESSION['failed']=true;
            header('location:index.php');
            exit();
        }
    }
}} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null; 
?>
