<!DOCTYPE html>
<html>
	<head>
		<title>masanoyandembo connection</title>
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
border-radius:13px;
border-radius:13px;
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
	
	<body class="le_tout">
	
	
		<header class="la_tete"">
			<div class="banniere">
				<h3 class="titre_de_page">www.masanoyandembo.com</h3>
			</div>
			
			
			
			
			<!--div class="obedphoto"><img src="lipa.png"></div--><br>
			
		</header>
		
	
		<ul class="nav">
			<li><a href="index.php">Accueil </a></li>
			<li><a href="inscription.php">S'inscrire</a></li>			
		</ul>
	
	
	
	

		<div class="katikati">
			
			<article class="article" style="border-bottom:0px;">
			
				<form action="OMMmyAdmin/v_connection.php" method="POST" class="ma_tutu">
							<fieldset class="se_connecter">
								<legend><h3 class="titre_h3">CONNECTEZ-VOUS !</h3></legend>
								
			
									<br>
													
								
								<label for="pseudo_user">Pseudo :</label>
								<input type="text" name="pseudo_user" required>
									<br>
									
								<label for="mot_de_passe">Mot de passe :</label>
								<input type="password" name="mot_de_passe" required>
									<br>
									
								<button type="submit" name="connexion" class="sharringan">Connection</button>
								<button type="reset" class="sharringan">Annuler </button>
								
							</fieldset>
				</form>
					
			</article>
			
		</div>
		
		

	</body>
</html>