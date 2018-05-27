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
$sys=addslashes(htmlspecialchars($_POST['sys']));
$nom=addslashes(htmlspecialchars($_POST['nom']));
$langue=addslashes(htmlspecialchars($_POST['langue']));
$description=addslashes(htmlspecialchars($_POST['description']));
$site=addslashes(htmlspecialchars($_POST['site']));
$link=addslashes(htmlspecialchars($_POST['link']));





switch($do){//vgoir la volonté de 'lutilisateur
case 'add':
//reqeute d'insertion
mysql_query("INSERT INTO emulateurs VALUES('','$sys','$nom','$langue','$description','$site','$link')") or die ("Erreur requete ");
?><title>Administration De Emul-Age</title>
Emulateur Ajoutée Avec Succes
<p><a href="admin_emulator.php">Retour Administration Des Emulateurs</a> - <a href="index.php">Retour Index Administration </a></p>
<?

break;

case 'modify':
mysql_query("UPDATE emulateurs SET sys='$sys',nom='$nom',langue='$langue',description='$description',site='$site',link='$link' Where id='$_POST[id]'");
?>
Emulateur Modifié Avec Succes
<p><a href="admin_emulator.php">Retour Administration Des Emulateurs</a> - <a href="index.php">Retour Index Administration </a></p>
<?
}
mysql_close();

?>
