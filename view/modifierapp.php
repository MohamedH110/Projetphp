<?php
require_once('../controllers/appartementcontroller.php');
$idapp=$_POST["idapp"];
$apaclr=new appartementController();
$l=$apaclr->getapartment($idapp);

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
<section class="contact_section  ">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-6 ">
          <div class="form_container">
            <div class="heading_container ">
              <h2>
                Edit Apartement 
              </h2>
            </div>
            <form action="modifierapp.php" method="post">
            <div>
                <input type="text" placeholder="Apartment ID" name="ida" value="<?php echo $idapp ?>"readonly/>
              </div>  
            <div>
                <input type="text" placeholder="Rental price" name="prix" value="<?php echo $l['prixlocation'] ?>"required/>
              </div>
              <div>
                <input type="text" placeholder="Surface area" name="superficie"  value="<?php echo $l['superficie'] ?>" required/>
              </div>
              <div>
                <input type="text" placeholder="Type" name="type"  value="<?php echo $l['type'] ?>"required/>
              </div>
              <div>
                <input type="text" placeholder="Etat" name="etat"   value="<?php echo $l['etat'] ?>"required/>
              </div>
              
              <div>
                <input type="text" placeholder="Adress" name="adresse"  value="<?php echo $l['adresse'] ?>"required />
              </div>
              <div class="btn_box">
                <button>Update</button>
              </div>
            </form>
            <div >
                           <a href="admin.php" style="text-decoration: none;">
                       <button style="background: none; border: none; font-size:22px;margin-left:0px;margin-top:0px;color:black;">&larr; Return</button>
                             </a>
                    
                        </div>
          </div>
        </div>
        </div>
    </div>
  </section>

</html>
<?php
if(isset($_POST['ida'])){
    require_once('../controllers/appartementcontroller.php');
    require_once('../modele/appartement.php');
        $idapp=$_POST['ida'];
        $prix = $_POST['prix'];
        $superficie = $_POST['superficie'];
        $type = $_POST['type'];
        $etat = $_POST['etat'];
        $adresse=$_POST['adresse'];
        
        $appartement = new appartement($prix, $superficie, $type, $etat,$adresse);
        $appclr = new appartementController();
        $res=$appclr->modifier_apar($appartement,$idapp)  ;
        if ($res) {
            echo "<script>alert('Account updated successfully');</script>";
        } 
      }
     
      ?>
      