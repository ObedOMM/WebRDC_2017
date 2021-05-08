				<?php
					try	{	$bdd = new PDO('mysql:host=localhost;dbname=ommdev', 'root', '');	}
					catch(Exception $e)	{	die('Erreur : '.$e->getMessage());	}
				?>