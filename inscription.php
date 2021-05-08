<?php
// On démarre la session AVANT d'écrire du code HTML
	//session_start();
// On s'amuse à créer quelques variables de session dans $_SESSION
//$_SESSION['prenom'] = 'Jean';
//$_SESSION['nom'] = 'Dupont';
//$_SESSION['age'] = 24;
?>


<!DOCTYPE html>
<html>
	<head>
		<title>masanoyandembo insciption</title>
		<meta charset="">
		<link rel="stylesheet" href="styleinscription.css">
				<style>
		
button[type=submit]{
font-weight:bold;
font-size:18px;
color:black;
background-color:#CCC;
height:30px;
margin-top:13px;
border-radius:9px;
//border-top:1px solid white;
//border-bottom:1px solid #666;
}

button[type=reset]{
font-weight:bold;
font-size:18px;
color:black;
background-color:#CCC;
height:30px;
margin-top:13px;
border-radius:9px;
}

.sharringan {
 box-shadow:1px 1px 10px black;}
 
input[type=text]:required{
outline:2px #369 solid;
font-weight:bold;
}

input[type=date]:required{
outline:2px #369 solid;
font-weight:bold;
}

input[type=email]:required{
outline:2px #369 solid;
font-weight:bold;
width:200px;
}

input[type=password]:required{
outline:2px #369 solid;
font-weight:bold;
}

select:required{
outline:1px #369 solid;
}
label {
margin-top:5px;
display:inline-block;
width:10em;
}


		</style>
	</head>
	
	<div class="lune">
	  <body class="le_tout">
	
	
		<header class="la_tete">
			<div class="banniere">
				<h3 class="titre_de_page">www.masanoyandembo.com</h3> 
			</div>
			
			
		</header>
	
		<ul class="nav">
			<li><a href="index.php">Accueil </a></li>
			<li><a href="connection.php">Se connecter </a></li>			
		</ul>
	
	
	

		<div class="katikati">
			
			<article class="article" style="border-bottom:0px;">
			
				<form action="OMMmyAdmin/v_inscription.php" method="POST" class="ma_tutu">
							<fieldset class="se_connecter">
								<legend><h3 class="titre_h3">Inscription !</h3></legend>
								
			
									<br>
								<label for="pseudo_user" title="Ce n'est pas votre nom propre mais le nom à utileser dans le site">Pseudo :</label>
								<input type="text" maxlength="13" name="pseudo_user" required>
									<br>
								
								<label for="sexe" required>Sexe :</label> 
									<input type="radio" name="sexe" value="M" id="masculin"><label for="masculin">Masculin</label>
									<input type="radio" name="sexe" value="F" id="feminin"> <label for="feminin">Féminin</label>

									<br/>
								
								
								
								
								<label for="mail">Entrez votre e-mail :</label>
								<input type="email" maxlength="25" name="mail" placeholder="ommartiste007@gmail.com" required>
									<br>
								
								
								
								<label for="pass">Mot de passe :</label>
								<input type="password" maxlength="16" name="mot_de_passe" required>
									<br>
									<br>
									
								
								
								<label for="nom_user">Nom :</label>
								<input type="text" maxlength="13" name="nom_user" required>
									<br>					
								
								<label for="prenom_user">Prenom :</label>
								<input type="text" maxlength="13" name="prenom_user" required>
									<br>
									
								
									
								<label for="date_de_naissance">Date de naissance :</label> <input type="date" name="date_de_naissance" required>
									<br>								
											
									
									
								<button type="submit" class="sharringan">Inscription</button>
								<button type="reset" class="sharringan">Annuler </button>
						
							</fieldset>
				</form>
				
			</article>
			
		</div>
		
		

	</body>
	</div>
</html>