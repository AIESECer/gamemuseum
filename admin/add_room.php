<?

/* Nom: add_room.php
   Auteur: Yami (Yami_ne1(à)hotmail.com)
   Role: Ajout de donnes(room)a la table room
   Creer le: Vendredi-08-Juin-2007
*/

include('../connexion.php');

if(isset($_GET['do']) and $_GET['do']=='modify'){
$do='modify';
}
elseif(isset($_GET['do']) and $_GET['do']=='add'){
$do='add';
}

$sys=addslashes(htmlspecialchars($_POST['sys']));
$nom=addslashes(htmlspecialchars($_POST['nom']));
$type=addslashes(htmlspecialchars($_POST['type']));
$langue=addslashes(htmlspecialchars($_POST['langue']));
$date=addslashes(htmlspecialchars($_POST['date']));
$edit=addslashes(htmlspecialchars($_POST['edit']));
$img=addslashes(htmlspecialchars($_POST['img']));
$link=addslashes(htmlspecialchars($_POST['link']));





switch($do){
case 'add':
if(empty($_POST['sys'])or empty($_POST['nom'])or empty($_POST['type'])or empty($_POST['date'])or empty($_POST['edit'])or empty($_POST['img'])or empty($_POST['link'])){

print'Vous vez oublier de remplir un champ. Tous les champs sont obligatoires';
include('add_rom_form.php');
}
else{

mysql_query("INSERT into roms VALUES('','$sys','$nom','$type','$langue','$date','$edit','$img','$link')") or die("Erreure requete ");
?><title>Administration De Emul-Age</title>
Room Ajoutée Avec Succes
<p><a href="admin_rooms.php">Retour Administration Des Rooms</a> - <a href="index.php">Retour Index Administration </a></p>
<?
}
break;
case 'modify':
mysql_query("UPDATE roms SET sys='$sys',nom='$nom',type='$type',langue='$langue',date='$date',edit='$edit', img='$img',link='$link' Where id='$_POST[id]'");
?>
Room Modifié Avec Succes
<p><a href="admin_rooms.php">Retour Administration Des Rooms</a> - <a href="index.php">Retour Index Administration </a></p>
<?
break;
}

mysql_close();
?>