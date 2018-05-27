<link href="../css.css" rel="stylesheet" type="text/css" />
<title>Administration De Emul-Age</title><div id="corps">


<?

include('connexion.php');//Ficher de configuration


mysql_query("DELETE from emulateurs where id='$_GET[id]'");
?>
Emulateur Supprimé Avec Succes
<p><a href="admin_emulator.php">Retour Administration Des Emulateurs</a> - <a href="index.php">Retour Index Administration </a></p>
<?

mysql_close();


?>
</div>