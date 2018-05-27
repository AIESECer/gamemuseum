<link href="../css.css" rel="stylesheet" type="text/css" />
<title>Administration De Emul-Age</title><div id="corps">
<?

include('connexion.php');//Ficher de configuration


mysql_query("DELETE from roms where id='$_GET[id]'");

?>


Room Supprimée Avec Succes
<p><a href="admin_room.php">Retour Administration Des Rooms</a> - <a href="index.php">Retour Index Administration </a></p>
<?
mysql_close();
?>
</div>