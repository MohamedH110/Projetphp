<?php
require_once('../controllers/clientcontroller.php');
$clr=new ClientController();
$id=$_POST['idClient'];
$l=$clr->getClient($id);
?>
<html>
<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 400px;
    margin: 0 auto;
}

.contact_section {
    padding: 50px 0;
}

.form_container {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.heading_container h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
}

form {
    display: grid;
    grid-gap: 20px;
}

input {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4caf50;
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}

.btn_box {
    text-align: center;
}

.return-btn {
    background: none;
    border: none;
    font-size: 18px;
    margin-left: 20px;
    color: #333;
    cursor: pointer;
}

.return-btn:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .form_container {
        padding: 20px;
    }
}

</style>
<section class="contact_section">
   
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6">
                <div class="form_container">
                    <div class="heading_container ">
                        <h2>Account update</h2>
                    </div>
                    <form action="modifierclient2.php" method="post">
                        <!-- Add hidden input for idClient -->
                        

                        <div>
                         <input type="text" placeholder="Client Id" name="idC" value='<?php echo $l['idClient'] ?>' readonly/>
                        </div>

                        <div>
                            <input type="text" placeholder="First Name" name="nom"  value='<?php echo $l['nom'] ?>' />
                        </div>
                        <div>
                            <input type="text" placeholder="Last Name" name="prenom" value='<?php echo $l['prenom'] ?>'/>
                        </div>
                        <div>
                            <input type="text" placeholder="Phone Number" name="telephone" value='<?php echo $l['telephone'] ?>'/>
                        </div>
                        <div>
                            <input type="email" placeholder="Email" name="email" value='<?php echo $l['email'] ?>'/>
                        </div>
                        <div>
                            <input type="text" placeholder="Password" name="password" value='<?php echo $l['password'] ?>'/>
                        </div>
                        
                        <div class="btn_box">
                            <button type="submit">update</button>
                        </div>

                    </form>
                    <div >
                           <a href="admin.php" style="text-decoration: none;">
                       <button style="background: none; border: none; font-size:22px;margin-left:0px;margin-top:0px;color:black;">&larr; Return</button>
                             </a>
                    
                        </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-6">
                <!-- ... your other content ... -->
            </div>
        </div>
    </div>
</section>
  </div>
</html>
  <?php

if(isset($_POST['idC'])){
require_once('../controllers/clientcontroller.php');
require_once('../modele/client.php');
    $id=$_POST['idC'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    
    $client = new Client($nom, $prenom, $telephone, $email,$password);
    $clientctr = new ClientController();
    $res=$clientctr->modifier_user($client,$id);   
    if ($res) {
        echo "<script>alert('Account updated successfully');</script>";
    } 
  }
 
  ?>
  
  