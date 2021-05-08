<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

?>

<!DOCTYPE html>
<html>

	<head>
		<title>OMMdev Linafoot</title>
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
						<form method="GET" action="linafoot.php" id="frm">
						
							<label for="langue" style="color:yellow;font-weight:bold;border-radius:40px;">Select you language</label>	
							
								<select onchange="document.getElementById('frm').submit();" name="langue" placeholder="Language" required>
									<option value="french">French</option>
									<option value="english">English</option>
								</select>
						<form>		
</div>
			
			
			
			<h1 class="h2_sur_noir" style="text-align:left;text-indent:10px;margin-top:5px;margin-bottom:2px;">	<strong>www.yafoot.com</strong>	</h1>
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
	
					<strong><em>Bienvenue sur www.yafoot.com!</em></strong>
	
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
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;" width="728" height="90">
				 	<a href="OMMmyAdmin/image/Pub 02.jpg">	<img src="OMMmyAdmin/image/Pub 02.jpg" alt="Saimtama et Genos">	</a>	
		
			</div>
			<!--    PLAT  POUR LA PUBLICITE    -->	
	
	
	
	
			<!-- DEBUT DU PREMIER GROSS COLONNE-->		
			<article class="mon_article">
				<div class="last_news">

				<?php
					try	{	$bdd = new PDO('mysql:host=localhost;dbname=ommdev', 'root', '');	}
					catch(Exception $e)	{	die('Erreur : '.$e->getMessage());	}
	
					$reponse = $bdd->query('SELECT * FROM news_simple WHERE categorie_nsimple = "Linafoot" ORDER BY id_nsimple DESC LIMIT 0, 6');

					while ($donnees = $reponse->fetch())
					{
				?>
					<h3 class="mon_h3"><?php echo' ' . $donnees['titre_nsimple'] . ' ' ?></h3>
					<h5 class="mon_h5"><?php echo' ' . $donnees['date_creation_ns'] . ' ' ?></h5>
					<p class="ma_paragraph">
						<?php echo' ' . $donnees['contenu_nsimple'] . ' ' ?>
					</p>
					<hr><hr>
					
				<?php
				}
					$reponse->closeCursor(); // Termine le traitement de la requête
				?>
				</div>
		</article>
		<!-- Fin DU PREMIER GROSS COLONNE-->



		<article class="mon_article">
				
			<!-- GROS ARTICLE  POUR LA PUBLICITE    --> 		
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;margin-left:20px;margin-bottom:25px;display:inline-block;">
				 <img src="OMMmyAdmin/image/Capturedcran31.jpg" alt="Saimtama et Genos" width="300px">		
		
			</div>
			<!--    FIN  GROS ARTICLE POUR LA PUBLICITE    -->





		<!--    	NOS NEWS AVEC LES PHOTOS ARRONDI-->
				<div class="mon_divmini">
				<?php
					
					$reponse = $bdd->query('SELECT * FROM news_cool WHERE categorie_ncool = "Linafoot" ORDER BY id_ncool');
					while ($donnees = $reponse->fetch())
					{
						echo' <div class="mon_psmini"><img src="OMMmyAdmin/image/' . $donnees['nom_photo'] . '.' . $donnees['extension_photo'] . '" alt="' . $donnees['description_ncool'] . '" width="150px"></div>'; ?>

							<div class="mon_paralien" style="overflow:auto;border-bottom:0px solid blue;box-shadow:3px 3px 10px black inset;margin-bottom:5px;">
					
								<p class="para_likolo" style="color:navy;text-align:justif;text-indent:25px;line-height:18px;padding:10px;margin-top:-7px;letter-spacing:0.8px;">
							<?php echo'' . $donnees['contenu_ncool'] . ' ';?>
						</p>
					</div>
				<?php } $reponse->closeCursor();?>	
				</div>
		<!--    NOS NEWS AVEC LES PHOTOS ARRONDI-->
		</article>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		<article class="mon_article2">
			<?php //include("OMMmyAdmin/article2.php") ?>

			<?php include("OMMmyAdmin/les_sujets.php") ?>
		</article>			
	</section>
		
		
		
		
		
		<aside class="mon_aside">
		<!--    NOS VIDEOS NA COINS YA DROITE-->
		
			 		<?php 
					
					$videosParPage=5; //Nous allons afficher 5 messages par page.
					
					
					
					
					
					
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
          echo ' <a style="font-size:21px;" href="linafoot.php?page='.$i.'">'.$i.'</a> ';
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