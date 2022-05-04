
<!DOCTYPE html>
<html>
<head>
	<title>Portfolio BTS SIO - Kerraz Mohamed </title>
	<meta charset="utf-8"> 	
  	<meta name="viewport" content="width=device-width, initial-scale=1">

   	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<link href="css/bootstrap.css" rel="stylesheet">


</head>


  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-column align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="images/logoo.png" width="200" height="150" class="mb-2">
        </a>

        			<ul class="nav justify-content-center">
  						   <li class="nav-item">
   								 <a class="nav-link px-3 text-white"  href="index.php?page=0">Accueil</a>
  							 </li>
 							   <li class="nav-item">
   								 <a class="nav-link px-3 text-white" href="index.php?page=3">Projets</a>
  							 </li>
 							   <li class="nav-item">
   							 	  <a class="nav-link px-3 text-white" href="index.php?page=4">Veille technologique</a>
  						   </li>
						     <li class="nav-item">
   							   <a class="nav-link px-3 text-white" href="index.php?page=5">Stage</a>
 						    </li>
 						      <li class="nav-item">
   							   <a class="nav-link px-3 text-white" href="index.php?page=6">Contact</a>
 						    </li>
					  	</ul>



        <div class="text-end">
        	<a class="btn btn-outline-light me-2" onclick="window.location.href = 'powerpoint/CV_.pdf';">Mon CV</a>

        	<a class="btn btn-primary" onclick="window.location.href = 'powerpoint/tableau.pdf';">Tableau de synthèse</a>
        </div>
      </div>
    </div>
  </header>



<body >

	<?php
		if (isset($_GET['page'])) 
			$page = $_GET['page']; 
		else 
			$page = 0; 
		
		switch ($page) {
			case 1 : require_once("page_ppe.php"); 	
					 break;
			case 2 : require_once("page_competence.php"); 	
					 break;
			case 3 : require_once("page_projet.php");
					 break;
			case 4 : require_once("page_veille.php"); 	
					 break;
			case 5 : require_once("page_stage.php"); 	
					 break;
			case 6 : require_once("page_contact.php"); 	
					 break;
			case 7 : require_once("page_ppe2.php"); 	
					 break;
			case 0 : require_once("home.php"); 	
					 break;
			default : require_once("erreur.php"); 	
					 break;
		}
	
	?>
	<br><br><br>
<div class="container">
  <footer class="py-3 my-4">
    <p class="text-center fw-bolder">&copy; 2022, Mohamed Kerraz</p>
  </footer>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



</body>
</html>

