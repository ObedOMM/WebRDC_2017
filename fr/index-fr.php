<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

	include('connection_ommdev.php'); //ON SE CONNECTE A NOTRE BASE DE DONNEES
?>



<!DOCTYPE html>
<html>

	<head>
		<title>yafoot Accueil</title>
		<link rel="stylesheet" href="style/style.css" />
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content="96">
		<meta name="author" content="OBED MULUMBA WAMULUMBA">
		<meta name="description" content="leopard, linafoot, kinshasa, congo, ">
		<meta name="keyword" content="football afrique">
<!--[if lte IE 7]>
<link rel="stylesheet" href="style_ie.css" />
<![endif]-->


<!--[if lt IE 9]><script src="html5ie.js"></script><![endif]-->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

		
	</head>
	
	
	<body class="le_tout">
		<div class="lune">	
			
			<header class="la_tete">
		
	<?php	

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
						<form method="GET" action="index.php" id="frm">
						
							<label for="langue" style="color:yellow;font-weight:bold;">Select you language</label>	
							
								<select onchange="document.getElementById('frm').submit();" name="langue" placeholder="Language" required>
									<option value="fr">French</option>
									<option value="english">English</option>
								</select>
						<form>		
</div>
			
			
			<h1 class="h2_sur_noir" style="text-align:left;text-indent:10px;margin-top:5px;margin-bottom:2px;">	<strong>www.yafoot.com</strong>	</h1>
		</header>	
		
			<style>
				div > .mapoto
					{
						width:3OOpx;height:200px;background-image: url(OMMmyAdmin/image/OMMPsho.png);background-repeat: no-repeat;background-size: 100% 100%;background-origin: content-box;
					}
			</style>		
		<div class="mapoto">

		</div>
		
		
		<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!	DEBUT MENU DEROULANT	!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
			<?php include("marque.php"); ?>
		<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!	FIN MENU DEROULANT	!!!!!!!!!!!!!!!!!!!!!!!!!!!!--> 
		
		<?php include("inclusion/nav.php"); ?>

			
	<section class="mon_section">
	
			<!-- PLAT POUR LA PUBLICITE    --> 		
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;" width="728" height="90">
				 	<a href="OMMmyAdmin/image/Pub 02.jpg">	<img src="OMMmyAdmin/image/Pub 02.jpg" alt="Saimtama et Genos">	</a>	
		
			</div>
			<!--    PLAT  POUR LA PUBLICITE    -->	
	
	
	
			<!-- DEBUT DU PREMIER GROSS COLONNE-->		
			<article class="mon_article">
				<div class="last_news">
				
				<?php
					$reponse = $bdd->query('SELECT * FROM news_simple ORDER BY id_nsimple DESC LIMIT 0, 6');
					
					while ($donnees = $reponse->fetch())
					{
				?>
					<h3 class="mon_h3"><?php echo' ' . $donnees['titre_nsimple'] . ' ' ?></h3>
					<h5 class="mon_h5"><?php echo' ' . $donnees['date_creation_ns'] . ' ' ?></h5>
					<p class="ma_paragraph">
						<?php echo' ' . $donnees['contenu_nsimple'] . ' ' ?>
					</p>
					<hr>
					
				<?php
				}
					$reponse->closeCursor(); // Termine le traitement de la requête
				?>
				</div>
			</article>
			<!-- Fin DU PREMIER GROSS COLONNE-->



		<article class="mon_article">
			<!-- GROS ARTICLE  POUR LA PUBLICITE    --> 		
			<div class="mon_div1" style="margin-bottom:15px;">
				 <img src="OMMmyAdmin/image/Capturedcran31.jpg" alt="Saimtama et Genos" width="300px">		
		
			</div>
			<!--    FIN  GROS ARTICLE POUR LA PUBLICITE    -->





			<!--    	NOS NEWS AVEC LES PHOTOS ARRONDI-->
			<div class="mon_divmini">
				<?php
					
					$reponse = $bdd->query('SELECT * FROM news_cool ORDER BY id_ncool LIMIT 0, 4');
					while ($donnees = $reponse->fetch())
					{
						echo' <div class="mon_psmini"><a href="OMMmyAdmin/image/' . $donnees['nom_photo'] . '.' . $donnees['extension_photo'] . '"> <img src="OMMmyAdmin/image/' . $donnees['nom_photo'] . '.' . $donnees['extension_photo'] . '" alt="' . $donnees['description_ncool'] . '" width="150px"></a></div>'; ?>

							<div class="mon_paralien" style="overflow:auto;border-bottom:0px solid blue;box-shadow:3px 3px 10px black inset;margin-bottom:5px;height:150px;">
					
								<?php echo'<h3 class="mon_h5" style="text-align:center;background-color:purple;color:#ffffff;box-shadow:2px 3px 5px black;">' . $donnees['titre_ncool'] . '</h3> 	'; ?>
								
								<p class="para_likolo" style="color:navy;text-align:justif;text-indent:25px;line-height:18px;padding:10px;margin-top:-7px;letter-spacing:0.8px;">
									<?php echo'' . $donnees['contenu_ncool'] . ' ';?>
								</p>
							</div>
				<?php } $reponse->closeCursor();?>	
			</div>
			<!--    NOS NEWS AVEC LES PHOTOS ARRONDI-->
			
						<!-- GROS ARTICLE  POUR LA PUBLICITE    --> 		
			<div class="mon_div1" style="margin-bottom:15px;">
				 <img src="OMMmyAdmin/image/Capturedcran31.jpg" alt="Saimtama et Genos" width="300px">		
		
			</div>
			<!--    FIN  GROS ARTICLE POUR LA PUBLICITE    -->
		</article>
			
			
			
			
			
			
			
			
			<!--    	NOS ACTUS EN CASECADE-->
				<?php
					
					$reponse = $bdd->query('SELECT * FROM news_cool ORDER BY id_ncool LIMIT 3, 2');
					while ($donnees = $reponse->fetch())
					{
						
					echo'
					<div class="actuali">
				
						<h3 style="text-align:center;background-color:purple;color:#ffffff;box-shadow:-3px 3px 5px black;margin:0px;border-bottom:1px dotted white;">' . $donnees['titre_ncool'] . '</h3> 	';
							
						echo' <div id="mavideo"><a href="OMMmyAdmin/image/' . $donnees['nom_photo'] . '.' . $donnees['extension_photo'] . '"> <img src="OMMmyAdmin/image/' . $donnees['nom_photo'] . '.' . $donnees['extension_photo'] . '" alt="' . $donnees['description_ncool'] . '" width="310px"></a></div>'; ?>
							
							
								
								<fieldset class="fild_actu">
									<?php echo'' . $donnees['contenu_ncool'] . ' ';?>
								</fieldset>
					</div>
				<?php } $reponse->closeCursor();?>	
				
			<!--    NOS ACTUS EN CASCADE-->
			
			
			
			
			
			
			
			
			
	 
		<article class="mon_article2">
			<?php //include("OMMmyAdmin/article2.php") ?>

		<code>	<?php include("OMMmyAdmin/les_sujets.php") ?>       </code>
		</article>			
	</section>
		
		
		
		
		
		
		
		
		
	<aside class="mon_aside">

			<!-- GROS ARTICLE  POUR LA PUBLICITE    --> 		
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;margin-left:20px;margin-bottom:20px;display:inline-block;">
					<a href="OMMmyAdmin/image/Capturedcran31.png">  <img src="OMMmyAdmin/image/Capturedcran31.PNg" alt="Saimtama et Genos" width="300px">     </a>
			</div>
			<!--    FIN  GROS ARTICLE POUR LA PUBLICITE    -->



				
				
<!--	LES VIDEOS  	-->
		<?php		
					$videosParPage=6; 
					
	
					$repon= $bdd->query("SELECT count(*) AS total FROM videos_courte");
	
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
					
	
					$reponse = $bdd->query('SELECT * FROM videos_courte ORDER BY id_video DESC LIMIT '.$premiereEntree.', '.$videosParPage.'');
					while ($donnees = $reponse->fetch())
					{
						echo'
						<div id="mavideo" style="display:inline-block;vertical-align:top;box-shadow:-3px 3px 7px black;margin-bottom:20px;width:340px;">
							<a href="streaming.php?source_frame=' .$donnees['source_frame'] . '">
							
								<video width="340" src="https://' .$donnees['source_frame'] . '" poster="OMMmyAdmin/image/' . $donnees['nom_img_postage'] . '.' . $donnees['ext_img_postage'] . '" controls>	
								</video>
		
							</a>
						</div>
					'; ?>
					
		<?php } $reponse->closeCursor();	?>
<!--	LES VIDEOS  	-->
				
				
				
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
          echo ' <a style="font-size:21px;" href="index.php?page='.$i.'">'.$i.'</a> ';
     }
}
echo '</p>';			
				
				
		?>			

	</aside>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<footer class="lefooter">
				  <?php include('OMMmyAdmin/footer.php'); ?> 
			</footer>
		

		</div>
	</body>	
		

</html>