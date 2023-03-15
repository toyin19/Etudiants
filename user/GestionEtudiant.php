<?php 
	require 'listeEtu.php';
	require 'supprimerEtu.php';
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
<body>
	<?php include 'require/nav.php'; ?>
  <section class="gestion-form py-5">
		 <div class="container  py-5 px-5 ">

     <table class="table" >
  <thead>
    <tr class="text-center text-light merriweather ">
      <th scope="col">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">sexe</th>
      <th scope="col">date_naissance</th>
      <th scope="col">Numero</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
   while($info = $getAllStudent->fetch()){
   ?>
    <tr class="text-center text-light merriweather ">
      <td><?= $info['matricule'] ?></td>
      <td><?= $info['nom'] ?></td>
      <td><?= $info['prenom'] ?></td>
      <td><?= $info['sexe'] ?></td>
      <td><?= $info['date_naissance'] ?></td>
      <td><?= $info['numero'] ?></td>
      <td>  
      <a href="modifierETU.php?id=<?= $info['id']?>"><div>Modifier</div></a> 
        <a href="supprimerEtu.php?id=<?= $info['id']?>"  onclick="return confirm('Voulez vous vraiment supprimer cet étudiant?');" ><div>Supprimer</div></a>
   </td>
   </tr>
   <?php
      }
      ?>
      </tbody>
</table>

     </div>
  </section>


  </body>
</html>
<?php require 'require/footer.php' ?>







<!-- 
  <div class="container text-center">
  <div class="card-header">
  <div class="row">
  <div class="col">Matricule</div>

 <div class="col">Nom</div>

  <div class="col">Prenom</div>

  <div class="col">sexe</div>

  <div class="col">date_naissance</div>

  <div class="col">Numero</div>

  <div class="col">Action </div>
  </div>
  </div>

<div class="card-body">
<?php 
   while($info = $getAllStudent->fetch()){
   ?>
<div class="row">
  <div class="col"><?= $info['matricule'] ?></div>

 <div class="col"><?= $info['nom'] ?></div>

  <div class="col"><?= $info['prenom'] ?></div>

  <div class="col"><td ><?= $info['sexe'] ?></div>

  <div class="col"><?= $info['date_naissance'] ?> </div>

  <div class="col"><?= $info['numero'] ?></div>
  
  <div class="col">
  <a href="modifierETU.php?id=<?= $info['id']?>"><div>Modifier</div></a> 
  <a href="supprimerEtu.php?id=<?= $info['id']?>"  onclick="return confirm('Voulez vous vraiment supprimer cet étudiant?');" ><div>Supprimer</div></a>

  </div>
   
  </div>
</div>
  <?php
      }
      ?>
  </div> -->

	
