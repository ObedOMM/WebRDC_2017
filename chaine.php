<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>

				<?php
					include('connection_ommdev.php'); //ON SE CONNECTE A NOTRE BASE DE DONNEES
				?>



<!DOCTYPE html>
<html>

	<head>
		<title>OMMdev e-Chaine</title>
		<link rel="stylesheet" href="style/chaine.css" />
	</head>
	
	
	<div class="lune">
	<!--	<body class="le_tout" style="background-image: url(OMMmyAdmin/image/1768.jpg);	background-repeat: no-repeat;background-size: 100% 100%;background-origin: content-box;"> -->
	<body class="le_tout">
		<header class="la_tete">
		
	<?php	
//if isset($_SESSION['autorisation']!=="oui")	
		if (isset($_SESSION['autorisation']))
		{
			if ($_SESSION['autorisation']=="oui")	
				  {
					echo'
						<span class="ins_oui">' . $_SESSION["pseudo_user"] . ' </span>
						<form action="OMMMyAdmin/se_deconnecter.php" method="POST">
							<input class="ins_co" style="height:25px;" type="submit" name="deconection" value="Se deconnecter">
						</form>
					';
				  }
			else
				  {	
					echo'
						<a href="connection.php" class="ins_co">Se connecter</a>
						<a href="inscription.php" class="ins_co">S\'inscrire</a>
					';				
				  }
		
		}		

		else
			
		echo'
			<a href="connection.php" class="ins_co">Se connecter</a>
			<a href="inscription.php" class="ins_co">S\'inscrire</a>
		';
		
	?>		
			
			
			
			
			
			
			
			<h1 class="h2_sur_noir" style="text-align:left;text-indent:10px;margin-top:5px;margin-bottom:2px;">	<strong>www.masanoyandembo.com</strong>	</h2>
		</header>	
		
		
		<div class="mapoto">
			<style>
				div > .mapoto
					{
						width:3OOpx;height:200px;background-image: url(OMMmyAdmin/image/OMMPsho.png);background-repeat: no-repeat;background-size: 100% 100%;background-origin: content-box;
					}
			</style>
		</div>
		
		
		<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!	DEBUT MENU DEROULANT	!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
			<?php include("marque.php"); ?>
		<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!	FIN MENU DEROULANT	!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
		
		<code><?php include("inclusion/nav.php") ?></code>

		<code><?php// include("inclusion/mon_slide.php") ?></code>
			
			
	<section class="streaming">
	
			<!-- PLAT POUR LA PUBLICITE    --> 		
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;margin-left:150px;margin-bottom:20px;display:inline-block;" width="728" height="90">
				 	<a href="OMMmyAdmin/image/Pub 02.jpg">	<img src="OMMmyAdmin/image/Pub 02.jpg" alt="Saimtama et Genos">	</a>	
		
			</div>
			<!--    PLAT  POUR LA PUBLICITE    -->	
	

			
			
			
			
			
			
		
<!--	LES VIDEOS  	-->
	
			 		<?php 
					
					$videosParPage=6; 
					
					
					
					
					
					$repon= $bdd->query("SELECT count(*) AS total FROM videos_youtube");
	
				while ($donnees = $repon->fetch())
				{
					
					
					$total=$donnees['total']; //On récupère le total pour le placer dans la variable $total.
				} $repon->closeCursor();	
				
				//Nous allons maintenant compter le nombre de pages.
				$nombreDePages=ceil($total/$videosParPage);

					if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
					{
						$pageActuelle=intval($_GET['page']);
						
						if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
						{
							$pageActuelle=$nombreDePages;
						}
					}
					else // Sinon
					{
						$pageActuelle=1; // La page actuelle est la n°1    
					}
 
				$premiereEntree=($pageActuelle-1)*$videosParPage; // On calcul la première entrée à lire
					
				// La requête sql pour récupérer les messages de la page actuelle.	
					
					
					
					
					
					
					
					
					$reponse = $bdd->query('SELECT * FROM videos_youtube ORDER BY id_video DESC LIMIT '.$premiereEntree.', '.$videosParPage.'');
					while ($donnees = $reponse->fetch())
					{
						echo'
						<div id="mavideo" style="display:inline-block;vertical-align:top;box-shadow:-3px 3px 7px black;margin-left:28px;margin-bottom:20px;width:300px;">
							<a href="streaming.php?source_frame=' .$donnees['source_frame'] . '">
							
								<video width="300" src="https://' .$donnees['source_frame'] . '" poster="OMMmyAdmin/image/' .$donnees['photo_postage'] . '.' .$donnees['extension'] . '" controls>	
								</video>
		
							</a>
						</div>
					'; ?>
					
				<?php } $reponse->closeCursor();	?>
				
<!--	LES VIDEOS  	-->
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		<div>	
			
			<!-- GROS ARTICLE  POUR LA PUBLICITE    --> 		
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;margin-left:28px;margin-bottom:10px;display:inline-block;">
					<a href="OMMmyAdmin/image/Capturedcran31.jpg">    <img src="OMMmyAdmin/image/Capturedcran31.jpg" alt="Saimtama et Genos" width="300px">	 </a>
			</div>
			<!--    FIN  GROS ARTICLE POUR LA PUBLICITE    -->
			
			
			
			
			<!-- GROS ARTICLE  POUR LA PUBLICITE    --> 		
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;margin-left:28px;margin-bottom:10px;display:inline-block;">
					<a href="OMMmyAdmin/image/Capturedcran31.png">  <img src="OMMmyAdmin/image/Capturedcran31.PNg" alt="Saimtama et Genos" width="300px">     </a>
			</div>
			<!--    FIN  GROS ARTICLE POUR LA PUBLICITE    -->
			
			
			
			
			<!-- GROS ARTICLE  POUR LA PUBLICITE    --> 		
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;margin-left:28px;margin-bottom:10px;display:inline-block;">
					<a href="OMMmyAdmin/image/Capturedcran31.jpg">    <img src="OMMmyAdmin/image/Capturedcran31.jpg" alt="Saimtama et Genos" width="300px">	 </a>
			</div>
			<!--    FIN  GROS ARTICLE POUR LA PUBLICITE    -->
			
		<div>		
		
<style>
p > a:hover{color:yellow;text-shadow:1px 2px 4px black;}
p{text-align:center;font-weight:bold;font-size:20px;}
</style>
		
		<?php 
				
	echo '<p style="">Page : '; //Pour l'affichage, on centre la liste des pages
for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
{
     //On va faire notre condition
     if($i==$pageActuelle) //Si il s'agit de la page actuelle...
     {
         echo ' [ '.$i.' ] '; 
     }	
     else //Sinon...
     {
          echo ' <a style="font-size:21px;" href="chaine.php?page='.$i.'">'.$i.'</a> ';
     }
}
echo '</p>';			
				
				
		?>
					
			
			
		
	</section>
		
		
		
		
		
		
		
		
		
		
	
		
		
		
		
		
		
		
		<footer class="lefooter">
			<?php include('OMMmyAdmin/footer.php'); ?>
		</footer>
		
	
	</body>	
	</div>	

</html>