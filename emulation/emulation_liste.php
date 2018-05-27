
<?php
/* Nom: emulation.php
   Auteur: Yami (Yami_ne1(à)hotmail.com)
   Site: Game Museum(www.gamemuseum.ht.st)
   Role: Affiche les resultats(l'emulation) selectionnée dans le menu emu.php
   Creer le: Dimanche-25-Mars-2007 a 12:20(GMT)   
   Deniere Modification:Lundi-9-Avril-2007
*/

include('connexion.php');//Inclusion du fichier de connexion a mysql

//----------Affichage des emulateurs--------------------------------------------------------------------------------//
$sql_titre=mysql_query("SELECT * from emulation where sys='$_GET[sys]' ");
$sql_emulateurs=mysql_query("SELECT * from emulateurs Where sys='$_GET[sys]' ");//requete de selection
$sql_num_emulateurs=mysql_query("SELECT id from emulateurs");
$num_emulateurs=mysql_num_rows($sql_num_emulateurs);//Nombre de resultat(emulateurs) pour la requete $sql_emulateurs

$res_titre=mysql_fetch_array($sql_titre);//affichage titre page
print'<h1><img src="images/'.$res_titre['sys'].'.gif">';
print'Emulation '.$res_titre['name'].'</h1>';
?>
<p><?php include('site/pub_grand.php'); ?></p>
<p><a href="emulation.php?url=emulation">&lt;&lt;Retour a toute l'emulation</a><br />
</p>
<h2>Description</h2>
<? 
print $res_titre['des'];
?>
<?
//Affichae des resulatats(emulateurs)---------------------------------------------//
print'<h2>Emulateurs</h2>';
while($res_emulateurs=mysql_fetch_array($sql_emulateurs)){
print '<img src="images/'.$res_emulateurs['langue'].'.gif">';
print '<span class="sous_titre">'.$res_emulateurs['name'].'</span>';
print '<a href="'.$res_emulateurs['link'].'">[Telecharger]</a>';
print '<br>';
print'<p>';
print '<strong>Description:</strong> ';
print $res_emulateurs['description'];
print'</p>';
print'<a href="'.$res_emulateurs['site'].'" target="_blenk">Site Officiel</a>';
print'<br>';
}
//-------------------------------------------------------------------//

//-------Affichage des Rooms----------------------------------------------------------------------------------//
$sql_rooms=mysql_query("SELECT * from roms Where sys='$_GET[sys]' ");//requete de selection
$sql_num_rooms=mysql_query("SELECT id from roms where sys='$_GET[sys]'");
$num_rooms=mysql_num_rows($sql_num_rooms);//Nombre de resultat(rooms) pour la requete $sql_rooms
?>
<h2>Rooms - Isos</h2>

<?
if($num_rooms=='0'){
print'Aucune room disponible pour cette categorie';
}else{
//Affichage ds resultat(Rooms)--------------------------------//
while($res_rooms=mysql_fetch_array($sql_rooms)){
print'<img src="images/'.$res_rooms['langue'].'.gif">';
print' ';
print'<a href="emulation.php?url=dw&sys='.$_GET['sys'].'&id='.$res_rooms['id'].'">'.$res_rooms['nom'].'<a/><br>';

}
}
//-------Affichage des liens --------------------------------------------//
mysql_close();
?>
<br />
<a href="emulation.php?url=emulation">&lt;&lt;Retour a toute l'emulation</a>