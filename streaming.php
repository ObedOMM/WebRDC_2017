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
		<title>OMMdev Streaming</title>
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
		<code>
			<marquee Class="Scroller" behavior="scroll" direction="left" width="99.8%" height="30" scrolldelay="0" onmouseover="" onmouseout=""  style="background-color:white; border:0px solid black; margin:0px;box-shadow:5px 2px 7px black inset;">
				<font size="5" face="arial, helvetica">
	
					<strong><em>Bienvenue sur www.masanoyandembo.com</em></strong>
	
					<font color="#333399">
						<strong>
							Rétrouvez içi des <abbr title="travailleurs indépandants"> Freelances </abbr> professionelles! Nous vous offrons des services de qualités et vous aidons à mieux combler vos besoins; achetez des logiciels haut de gamme, trouvez des  et comblez vos questions grâce au forum ...
						<strong/>
					</font>
				</font>
			</marquee>
		</code>
		<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!	FIN MENU DEROULANT	!!!!!!!!!!!!!!!!!!!!!!!!!!!!--> 
		
		<code><?php include("inclusion/nav.php") ?></code>

		<code><?php// include("inclusion/mon_slide.php") ?></code>
			
			
	<section class="mon_section">
	
			<!-- PLAT POUR LA PUBLICITE    --> 		
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;margin-left:10px;margin-bottom:10px;display:inline-block;" width="728" height="90">
				 	<a href="OMMmyAdmin/image/Pub 02.jpg">	<img src="OMMmyAdmin/image/Pub 02.jpg" alt="Saimtama et Genos">	</a>	
		
			</div>
			<!--    PLAT  POUR LA PUBLICITE    -->	
	
	
	
	
		<!-- VIDEO PRINCIPAL DU STREAMING--> 
			<div style="margin-left:20px;display:inline-block;vertical-align:top;border-radius:20px;">	
				
				<iframe width="700" height="400" src="https://<?php echo'' . $_GET['source_frame'] . ''; ?>" frameborder="0" allowfullscreen></iframe>
					
			</div>
		<!-- VIDEO PRINCIPAL DU STREAMING   --> 
			
			
			
			
			<!-- GROS ARTICLE  POUR LA PUBLICITE    --> 		
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;margin-left:44px;margin-bottom:10px;display:inline-block;">
				 <img src="OMMmyAdmin/image/Capturedcran31.jpg" alt="Saimtama et Genos" width="300px">		
		
			</div>
			<!--    FIN  GROS ARTICLE POUR LA PUBLICITE    -->
			
			<!-- GROS ARTICLE  POUR LA PUBLICITE    --> 		
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;margin-left:44px;margin-bottom:10px;display:inline-block;">
				 <img src="OMMmyAdmin/image/Capturedcran31.jpg" alt="Saimtama et Genos" width="300px">		
		
			</div>
			<!--    FIN  GROS ARTICLE POUR LA PUBLICITE    -->
			
			
	
	
	
	
	
	
	
	
			
			<!-- PLAT POUR LA PUBLICITE    --> 		
	
	
	
			<!--    PLAT  POUR LA PUBLICITE    -->
		
	</section>
		
		
		
		
		
		
		
		
		
	<aside class="mon_aside">
		<!--    NOS VIDEOS NA COINS YA DROITE-->
		
			 		<?php 
					
					$videosParPage=4; //Nous allons afficher 5 messages par page.
					
					
					
					
					
					
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
					
				
					$reponse = $bdd->query('SELECT * FROM videos_youtube ORDER BY id_video LIMIT '.$premiereEntree.', '.$videosParPage.'');
					while ($donnees = $reponse->fetch())
					{
						echo'
						<div id="mavideo" style="display:inline-block;vertical-align:top;box-shadow:-3px 3px 7px black;margin-bottom:20px;width:250px;">
							<a href="streaming.php?source_frame=' .$donnees['source_frame'] . '">
							
								<video width="250" src="https://' .$donnees['source_frame'] . '" poster="OMMmyAdmin/image/' .$donnees['photo_postage'] . '.' .$donnees['extension'] . '" controls>	
								</video>
		
							</a>
						</div>
					'; ?>
					
				<?php } $reponse->closeCursor();	?>
		
		
		<!--    NOS VIDEOS    NA COINS YA DROITE-->	 
			<style>
p > a:hover{color:yellow;text-shadow:1px 2px 4px black;}
p{text-align:center;font-weight:bold;font-size:20px;vertical-align:top;}
</style>
		
		<?php 
				
	echo '			<input style="position:relative;top:41px;box-shadow:3px 3px 7px black;display:inline-block;" type="submit" name="PRECEDENT" value="PRE">

		<p>Page : '; //Pour l'affichage, on centre la liste des pages
		
for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
{
     //On va faire notre condition
     if($i==$pageActuelle) //Si il s'agit de la page actuelle...
     {
         echo ' [ '.$i.' ] '; 
     }	
     else //Sinon...
     {
          echo ' <a style="font-size:21px;" href="streaming.php?page='.$i.'">'.$i.'</a> ';
     }
}
echo '</p>		<input style="position:relative;top:-45px;box-shadow:3px 3px 7px black;left:200px;display:inline-block;" type="submit" name="SUIVANT" value="SUIV">


';			
				
				
		?>
			
				
	</aside>
		
		
		
		
		
		
	
		
		
		
		
		
		
		
		<footer class="lefooter">
			<?php include('OMMmyAdmin/footer.php'); ?>
		</footer>
		
	
	</body>	
	</div>	

</html>