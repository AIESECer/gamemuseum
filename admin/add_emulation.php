<?
/* Nom: add_emulation.php
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
$description=addslashes(htmlspecialchars($_POST['description']));






switch($do){//vgoir la volonté de 'lutilisateur
case 'add':
//reqeute d'insertion
mysql_query("INSERT INTO emulation VALUES('','$sys','$nom','$description')") or die ("Erreur requete ");
?><title>Administration De Emul-Age</title>
Categorie Ajoutée Avec Succes
<p><a href="admin_emulation.php">Retour Administration Des Categories</a> - <a href="index.php">Retour Index Administration </a></p>
<?

break;

case 'modify':
mysql_query("UPDATE emulation SET sys='$sys',name='$nom',des='$description' Where id='$_POST[id]'");
?>
Categorie Modifiée Avec Succes
<p><a href="admin_emulation.php">Retour Administration Des Categories</a> - <a href="index.php">Retour Index Administration </a></p>
<?
break;
}
mysql_close();

?>
