<?php
require 'enregisAction.php';
	session_start();
	  if (!isset($_SESSION['mail'])) {
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'require/head.php'; ?>
</head>

<body role="document" style="background-color: paleturquoise;">
	<?php include 'require/nav.php'; ?>
   

	<!-- <form action="" id="survey-form" method="POST"> -->
		
    <section class="gestion1-form py-5">
		 <div class="container  py-5 px-5   ">
     <?php 
		if (isset($error)) {			
		 ?>
		 <div style="color: white;, text-align: center; background-color: red ; padding: 15px;"> <?=$error ?></div>

		 <?php 
		}
		  ?>

		  <?php 
		if (isset($success)) {			
		 ?>
		 <div style="color: white;, text-align: center; background-color: green ; padding: 15px;"> <?=$success ?></div>

		 <?php 
		}
		  ?>
            <form>
    
                <div class="row" class="center center">

                    <div class="col-md-6 col-sm">

                    <div class="input-group mb-3 ">
      <span class="input-group-text " id="basic-addon1 "><l class="fas fa-phone "></l></span>
         <input type="text" name="mat" id="mat" placeholder="Votre Matricule" class="form-control" >
       </div>
       
     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"><l class="fas fa-user"></l></span>
      <input type="text" name="nom" id="nom" placeholder="Votre nom"   class="form-control">

     </div>

      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"><l class="fas fa-user"></l></span>
      <input type="text" name="prenom" id="prenom" placeholder="Votre Prénom" class="form-control" >

      </div>

      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"><l class="fas fa-user"></l></span>
      <select name="sexe" id="sexe" class="form-control">
      	<option value="Masculin">Masculin</option>
      	<option value="Féminin">Féminin</option>
      	
      </select>
      </div>

      <div class="input-group mb-3 ">
      <span class="input-group-text " id="basic-addon1 "><l class="fas fa-phone "></l></span>
      <input type="date" name="date" id="date" placeholder="Votre date de naissance" class="form-control" >

      </div>

    <div class="input-group mb-3 ">
      <span class="input-group-text " id="basic-addon1 "><l class="fas fa-phone "></l></span>
      <input type="number" name="num" id="num" placeholder="Votre numéro de telephone" autocomplete="false" class="form-control">
      
      <button id="submit" name="validate" class="btn-submit" type="submit" class="form-control">Valider</button>
    </div>
    </div>
    </div>
     </form>
     </div>
    </section>




      
</body>
</html>
<?php require 'require/footer.php' ?>
