				<div class="petitcarre">
				<h3 class="mon_h3" style="text-align:center;">News</h3>
					<?php
						try	{	$bdd = new PDO('mysql:host=localhost;dbname=web_rdc', 'root', '');	}
						catch(Exception $e)	{	die('Erreur : '.$e->getMessage());	}
	
						$reponse = $bdd->query('SELECT * FROM news_cool WHERE categorie_ncool = "Monde" ORDER BY id_ncool DESC LIMIT 0, 3');
	
						while ($donnees = $reponse->fetch())
						{
							echo'  <h3 class="titrecarr"> ' . $donnees['titre_ncool'] . ' </h3> '; ?>
							<?php echo' <img src="OMMmyAdmin/image/' . $donnees['nom_photo'] . '.' . $donnees['extension_photo'] . '" alt="' . $donnees['description_ncool'] . '" width="200">'; ?>
							<p class="paracarr">
								<?php echo'	' . $donnees['contenu_ncool'] . ' '; ?>
							</p>
							<hr><hr>
					<?php
				}
				$reponse->closeCursor(); ?>		
				</div>
				
				<div class="petitcarre">
					<h3 class="mon_h3" style="text-align:center;"> Sport</h3>
						<?php
						try	{	$bdd = new PDO('mysql:host=localhost;dbname=web_rdc', 'root', '');	}
						catch(Exception $e)	{	die('Erreur : '.$e->getMessage());	}
	
						$reponse = $bdd->query('SELECT * FROM news_cool WHERE categorie_ncool = "Sport" ORDER BY id_ncool DESC LIMIT 0, 3');
	
						while ($donnees = $reponse->fetch())
						{
					?>	
					<?php echo'  <h3 class="titrecarr"> ' . $donnees['titre_ncool'] . ' </h3> '; ?>
					<?php echo' <img src="OMMmyAdmin/image/' . $donnees['nom_photo'] . '.' . $donnees['extension_photo'] . '" alt="' . $donnees['description_ncool'] . '" width="200">'; ?>
					<p class="paracarr">
						<?php echo'	' . $donnees['contenu_ncool'] . ' '; ?>
					</p>
					<hr>
					<?php } $reponse->closeCursor(); ?>		
				</div>


	
				<div class="petitcarre">	
					<h3 class="mon_h3" style="text-align:center;"> Autres</h3>
				<!-- ERREUR EZA TEEEEE -->					
					<?php
						try	{	$bdd = new PDO('mysql:host=localhost;dbname=web_rdc', 'root', '');	}
						catch(Exception $e)	{	die('Erreur : '.$e->getMessage());	}
	
						$reponse = $bdd->query('SELECT * FROM news_cool WHERE categorie_ncool = "Autres" ORDER BY id_ncool DESC LIMIT 0, 3');
	
						while ($donnees = $reponse->fetch())
						{
					?>
				
					<?php echo'  <h3 class="titrecarr"> ' . $donnees['titre_ncool'] . ' </h3> '; ?>
				
					<?php echo' <img src="OMMmyAdmin/image/' . $donnees['nom_photo'] . '.' . $donnees['extension_photo'] . '" alt="' . $donnees['description_ncool'] . '" width="200">'; ?>

					<p class="paracarr">
						<?php echo'	' . $donnees['contenu_ncool'] . ' '; ?>
					</p>
					<hr>
						<hr>
					<?php } $reponse->closeCursor(); ?>	
				<!-- ERREUR EZA TEEEEEE-->		
				</div>
				<hr><hr shade width=85% size=2><hr shade width=50% size=2>	
			
			
