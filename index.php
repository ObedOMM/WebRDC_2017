<?php 	

if (isset($_GET['langue']))
{
	if ($_GET['langue']=="fr")	
	{
		setcookie('langue', 'fr', time() + 1*24*36000, null, null, false, true); 
		include('fr/index-fr.php');
	}
	else
	{
		setcookie('langue', 'en', time() + 1*24*36000, null, null, false, true); 
		include('en/index-en.php');
	}		
}	
elseif (isset($_COOKIE['langue']))
{
	if ($_COOKIE['langue'] == "fr") //Imaginons que le cookie ait la valeur "fr"
	{
		include('fr/index-fr.php');
	}
	else
	{
		include('en/index-en.php');
	}
}
else
{
	setcookie('langue', 'fr', time() + 30*24*36000, null, null, false, true); 
	include('fr/index-fr.php');
}

?>