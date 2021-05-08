<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();



?>

<!DOCTYPE html>
<html>

	<head>
		<title>OMMdev Afrique</title>
		<link rel="stylesheet" href="style/style.css" />
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
			<!-- DEBUT DU PREMIER GROSS COLONNE-->		
			<article class="mon_article">
				<div class="last_news">

				<?php
					try	{	$bdd = new PDO('mysql:host=localhost;dbname=ommdev', 'root', '');	}
					catch(Exception $e)	{	die('Erreur : '.$e->getMessage());	}
	
					$reponse = $bdd->query('SELECT * FROM news_simple WHERE categorie_nsimple = "Afrique" ORDER BY id_nsimple DESC LIMIT 0, 6');

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
		<!-- GROS ARTICLE AVEC UN SEUL PHOTO    -->
				
			<div class="mon_div1" style="margin-bottom:15px;">
				 <img src="OMMmyAdmin/image/Capturedcran31.png" alt="Saimtama et Genos" width="298px">		

			</div>
				<!--    FIN  GROS ARTICLE AVEC UIN SEUL PHOTO    -->





		<!--    	NOS NEWS AVEC LES PHOTOS ARRONDI-->
				<div class="mon_divmini">
				<?php
					
					$reponse = $bdd->query('SELECT * FROM news_cool WHERE categorie_ncool = "Afrique"  ORDER BY id_ncool');
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

			<!-- GROS ARTICLE  POUR LA PUBLICITE    --> 		
			<div style="margin-top:12px;box-shadow:3px 3px 7px black;margin-left:20px;margin-bottom:20px;display:inline-block;">
					<a href="OMMmyAdmin/image/Capturedcran31.jpg">  <img src="OMMmyAdmin/image/Capturedcran31.jpg" alt="Saimtama et Genos" width="300px">     </a>
			</div>
			<!--    FIN  GROS ARTICLE POUR LA PUBLICITE    -->



				
				
			<!--	LES VIDEOS  	-->
	
<?php 
					
					$videosParPage=2; //Nous allons afficher 5 messages par page.
					
					
					
					
					
					
					$repon= $bdd->query('SELECT count(*) AS total FROM videos_courte WHERE categorie_video = "afrique" ');
	
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
					
					
					
					
					 
					
					$reponse = $bdd->query('SELECT * FROM videos_courte WHERE categorie_video = "afrique" ORDER BY id_video DESC LIMIT '.$premiereEntree.', '.$videosParPage.'');
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
          echo ' <a style="font-size:21px;" href="afrique.php?page='.$i.'">'.$i.'</a> ';
     }
}
echo '</p>';			
				
				
		?>			
				
				
	</aside>	
		
		
		<footer class="lefooter">
			<?php include('OMMmyAdmin/footer.php'); ?>
		</footer>
		
	
	</body>	
	</div>	

</html>