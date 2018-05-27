<?
/* Nom: add_news.php
   Auteur: Yami (Yami_ne1(à)hotmail.com)
   Role: Ajout de doonnés(news) dans la table
   Pour : Emul-Age (www.emulage.tk)
   Creer le: Vendredi-3-Aout-2007
*/

include('connexion.php');//Ficher de configuration

if(isset($_GET['do']) and $_GET['do']=='modify'){
$do='modify';
}
elseif(isset($_GET['do']) and $_GET['do']=='add'){
$do='add';
}

if(empty ($_POST['img'])){
$img='none';
$align='none';
}
elseif(isset($_POST['img'])){

$img=addslashes($_POST['img']);
}
//Preparation des données
$date=date("d-m-Y H:i");
$title=addslashes(htmlspecialchars($_POST['title']));
$news=addslashes(htmlspecialchars($_POST['news']));
$author=addslashes(htmlspecialchars($_POST['author']));
$author_mail=addslashes(htmlspecialchars($_POST['author_mail']));

$align=addslashes(htmlspecialchars($_POST['align']));




switch($do){//vgoir la volonté de 'lutilisateur
case 'add':
//reqeute d'insertion
mysql_query("INSERT INTO news VALUES('','$date','$title','$news','$author','$author_mail','$img','$align')") or die ("Erreur requete ");
?><title>Administration De Emul-Age</title>
News Ajouté Avec Succes
<p><a href="admin_news.php">Retour Administration Des Rooms</a> - <a href="index.php">Retour Index Administration </a></p>
<?

break;

case 'modify':
mysql_query("UPDATE news SET title='$title',news='$news',author='$author',author_mail='$author_mail',img='$img',align='$align' Where id='$_POST[id]'");

?>
News Modifié Avec Succes
<p><a href="admin_news.php">Retour Administration Des News</a> - <a href="index.php">Retour Index Administration </a></p>
<?
break;
}
mysql_close();

?>
