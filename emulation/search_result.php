<h1>Emulation - Resultat(s) de la recherche:</h1>
<p><?php include('site/pub_grand.php'); ?>&nbsp;</p>
<?php 
/* Nom: serch_result.php
   Auteur: Yami (Yami_ne1(à)hotmail.com)
   Site: Game Museum(www.gamemuseum.ht.st)
   Role: Affiche les resultats(room) recherchées.
   Creer le: Lundi-9-Avril-2007 a 16:55(GMT)   
   Deniere Modification: Lundi-9-Avril-2007
*/

include('connexion.php');
$room=addslashes($_POST['room']);
$sql_search=mysql_query("SELECT * from roms Where nom LIKE'%$room%' ") or die("err");
$num_rooms=mysql_num_rows($sql_search);
?>

<?
if($num_rooms=='0'){
print'Aucun resultat pour votre recherche';
}else{
//Affichage ds resultat(Rooms)--------------------------------//
print'Il ya <b>'.$num_rooms.' </b>resultat(s) pour la recherche: <b>'.$room.'</b><br>';
while($res_rooms=mysql_fetch_array($sql_search)){
print'<ul><li>';

print'<img src="images/'.$res_rooms['sys'].'.gif">';
print'<img src="images/'.$res_rooms['langue'].'.gif">';
print' ';
print'<a href="emulation.php?url=dw&sys='.$res_rooms['sys'].'&id='.$res_rooms['id'].'">'.$res_rooms['nom'].'<a/><br>';
print'</li></ul>';
}
}
//---------------------------------------------------------//

mysql_close();
?>
<a href="emulation.php?url=emulation">&lt;&lt;Retour a toute l'emulation</a>
