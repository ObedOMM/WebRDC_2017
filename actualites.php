<?php 

if (isset($_GET['langue']))
{
	if ($_GET['langue']=="fr")	
	{
		setcookie('langue', 'fr', time() + 1*24*36000, null, null, false, true); 
		include('fr/actualites-fr.php');
	}
	else
	{
		setcookie('langue', 'en', time() + 1*24*36000, null, null, false, true); 
		include('en/actualites-en.php');
	}		
}		
elseif (isset($_COOKIE['langue']))
{
	if ($_COOKIE['langue'] == "fr") //Imaginons que le cookie ait la valeur "fr"
	{
		include('fr/actualites-fr.php');
	}
	else
	{
		include('en/actualites-en.php');
	}
}
else
{
	include('fr/actualites-fr.php');
}

?>