<?php 
if (isset($_GET['langue']))
{
	if ($_GET['langue']=="fr")	
	{
		setcookie('langue', 'fr', time() + 1*24*36000, null, null, false, true); 
		include('fr/linafoot-fr.php');
	}
	else
	{
		setcookie('langue', 'en', time() + 1*24*36000, null, null, false, true); 
		include('en/linafoot-en.php');
	}		
}		
elseif (isset($_COOKIE['langue']))
{
	if ($_COOKIE['langue'] == "fr") //Imaginons que le cookie ait la valeur "fr"
	{
		include('fr/linafoot-fr.php');
	}
	else
	{
		include('en/linafoot-en.php');
	}
}
else
{
	include('fr/linafoot-fr.php');
}

?>