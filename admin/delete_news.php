<link href="../css.css" rel="stylesheet" type="text/css" />
<title>Administration De Emul-Age</title><div id="corps">

<?

include('connexion.php');//Ficher de configuration


mysql_query("DELETE from news where id='$_GET[id]'");
?>
News Supprimée Avec Succes
<p><a href="admin_news.php">Retour Administration Des News</a> - <a href="index.php">Retour Index Administration </a></p>
<?
mysql_close();

?>
</div>