<?php
// On d�marre la session AVANT d'�crire du code HTML
session_start();
?>

<?php
	include('connection_ommdev.php');
?>


<!DOCTYPE html>
<html>

	<head>
		<title>OMMdev Actualites</title>
		<link rel="stylesheet" href="style/style.css" />
	</head>
	
	
	<div class="lune">
	<!--	<body class="le_tout" style="background-image: url(OMMmyAdmin/image/1768.jpg);	background-repeat: no-repeat;background-size: 100% 100%;background-origin: content-box;"> -->
	<body class="le_tout">
		<header class="la_tete">
		
	<?php	
		if (isset($_SESSION['autorisation'])) //Si La variable session_autorisation existe
		{
			if ($_SESSION['autorisation']=="oui")	//Si ON A L'AUTORISATION 
				  {	//ON AFFICHE LE "Pseudo" du Session et Le bouton "Se d�connecter"					
				  echo' 
						<span class="ins_oui">' . $_SESSION["pseudo_user"] . ' </span>
						<form action="OMMMyAdmin/se_deconnecter.php" method="POST">
							<input class="ins_co" style="height:25px;" type="submit" name="deconection" value="Se deconnecter">
						</form>
					';
				  }
			else
				  {	//Si l'autorisation n'est pas oui, on affiche les liens "Se connecter" et "S'Inscrire" 	
					echo'
						<a href="connection.php" class="ins_co">Se connecter</a>
						<a href="inscription.php" class="ins_co">S\'inscrire</a>
					';				
				  }
		
		}		

		else
		{	// S'il n'existe pas la variable "Autorisation" de la Session,  on affiche les liens "Se connecter" et "S'Inscrire" 
			echo'
				<a href="connection.php" class="ins_co">Se connecter</a>
				<a href="inscription.php" class="ins_co">S\'inscrire</a>
			';
		}
	?>		
			
<!--
<div style="margin:inherit;display:inline-block;position:absolute;left:790px;top:5px;">	

	<ul class="nav">
		<li style="background:linear-gradient(to top,green,#003,#131,#589,#586);border-top-right-radius:5px;border-bottom-right-radius:5px;">
			<a href="" style="font-size:21px;background-color:transparent;">Language 
				<ul  class="dropdown">	
					<li><a href="index.php?langue=en">English</a></li>
					<li><a href="index.php?langue=fr">French</a></li>
				</ul>
			</a>
		</li>
	</ul>		
</div>
	-->				

<!--CODE A NE PAS NEGLIGER POU LES LANGUES  -->
			
			
<div style="margin:inherit;display:inline-block;background-color:red;height:20px;position:absolute;left:780px;top:15px;">	
						<form method="GET" action="actualites.php" id="frm">
						
							<label for="langue" style="color:yellow;font-weight:bold;border-radius:40px;">Select you language</label>	
							
								<select onchange="document.getElementById('frm').submit();" name="langue" placeholder="Language" required>
									<option value="french">French</option>
									<option value="english">English</option>
								</select>
						<form>		
</div>
		
			
			
			
			
<h1 class="h2_sur_noir" style="text-align:left;text-indent:10px;margin-top:5px;margin-bottom:2px;">	<strong>www.yafoot.com</strong>	</h1>
		</header>	
		
	<!--!!!!!!!!!!!!!!!!!!!	PHOTO    DU   PUBLICITE	!!!!!!!!!!!!!!!!!!!!-->
		<div class="mapoto">
				

				
			<style>
				div > .mapoto
					{
						width:3OOpx;height:200px;background-image: url(OMMmyAdmin/image/OMMPsho.png);background-repeat: no-repeat;background-size: 100% 100%;background-origin: content-box;
					}
			</style>
			<!--			<a href="">		<img src="OMMmyAdmin/image/OMMPsho.png" alt="Obed OMM au br�zil" width="1024" height="200px">	</a>	-->
		</div>
	<!--!!!!!!!!!!!!!!!!!!!	FIN   PHOTO   DU    PUBLICITE	!!!!!!!!!!!!!!!!!!!!-->
	
	
	
	
	
		
		<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!	DEBUT MENU DEROULANT	!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
			<?php include("marque.php"); ?>
		<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!	FIN MENU DEROULANT	!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
		
		
		<code><?php include("inclusion/nav.php") ?></code>
	
			
	<section class="streaming">
			


			
			
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
		



			<!--    	NOS ACTUS EN CASECADE-->

			 		<?php 
					
					$videosParPage=9; //Nous allons afficher 5 messages par page.
					
					
					
					
					
					
					$repon= $bdd->query("SELECT count(*) AS total FROM news_cool");
	
				while ($donnees = $repon->fetch())
				{
					
					
					$total=$donnees['total']; //On r�cup�re le total pour le placer dans la variable $total.
				} $repon->closeCursor();	
				
				//Nous allons maintenant compter le nombre de pages.
				$nombreDePages=ceil($total/$videosParPage);

					if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
					{
						$pageActuelle=intval($_GET['page']);
						
						if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le num�ro de la page) est plus grande que $nombreDePages...
						{
							$pageActuelle=$nombreDePages;
						}
					}
					else // Sinon
					{
						$pageActuelle=1; // La page actuelle est la n�1    
					}
 
				$premiereEntree=($pageActuelle-1)*$videosParPage; // On calcul la premi�re entr�e � lire
					
				// La requ�te sql pour r�cup�rer les messages de la page actuelle.	
					
					
					
					
					
					$reponse = $bdd->query('SELECT * FROM news_cool ORDER BY id_ncool DESC LIMIT '.$premiereEntree.', '.$videosParPage.'');
					while ($donnees = $reponse->fetch())
					{
						
					echo'
					<div style="margin-top:12px;box-shadow:3px 3px 7px black;margin-left:20px;margin-bottom:10px;display:inline-block;">
				
						<h3 style="text-align:center;background-color:purple;color:#ffffff;box-shadow:-3px 3px 5px black;margin:0px;border-bottom:1px dotted white;">' . $donnees['titre_ncool'] . '</h3> 	';
							
						echo' <div id="mavideo"><a href="OMMmyAdmin/image/' . $donnees['nom_photo'] . '.' . $donnees['extension_photo'] . '"> <img src="OMMmyAdmin/image/' . $donnees['nom_photo'] . '.' . $donnees['extension_photo'] . '" alt="' . $donnees['description_ncool'] . '" width="310px"></a></div>'; ?>
							
							
								
								<fieldset class="fild_actu">
									<?php echo'' . $donnees['contenu_ncool'] . ' ';?>
								</fieldset>
					</div>
				<?php } $reponse->closeCursor();?>	
				
			<!--    NOS ACTUS EN CASCADE-->
			
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
          echo ' <a style="font-size:21px;" href="actualites.php?page='.$i.'">'.$i.'</a> ';
     }
}
echo '</p>';			
				
				
		?>
	</section>
		
	<section class="mon_section">	
		<article class="mon_article2">
			<?php include("OMMmyAdmin/les_sujets.php") ?>
		</article>		
	</section>	
		
		

		
		
		
		
		
		
		
		
		<footer class="lefooter">
			<?php include('OMMmyAdmin/footer.php'); ?>
		</footer>
		
	
	</body>	
	</div>	

</html>