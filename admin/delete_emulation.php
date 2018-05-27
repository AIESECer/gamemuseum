
<link href="../css.css" rel="stylesheet" type="text/css" />
<title>Administration De Emul-Age</title><div id="corps">
<?

include('connexion.php');//Ficher de configuration


mysql_query("DELETE from emulation where id='$_GET[id]'");
?>
Categorie  Supprimér Avec Succes
<p><a href="admin_emulation.php">Retour Administration Des Categories</a> - <a href="index.php">Retour Index Administration </a></p>
<?
mysql_close();
?>
</div>