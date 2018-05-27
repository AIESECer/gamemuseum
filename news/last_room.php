<? 
/* Nom: last_room.php
   Auteur: Yami (Yami_ne1(à)hotmail.com)
   Site: Emulage(www.emulage.tk)
   Role: Affichage des dernieres room ajoutés sur le site
   Creer le: Dimanche-27-Mars-2007 
   Deniere Modification:27 mars,
*/

include('connexion.php');

$sql_last_rooms=mysql_query("SELECT * from roms order by id desc limit 0,5") or die ("erreure requete");

//affichage des resultats

while($res_last_rooms=mysql_fetch_array($sql_last_rooms)){
?>
<li>

<?
print'<img src="images/'.$res_last_rooms['langue'].'.gif">';
print'<a href="emulation.php?url=dw&sys='.$res_last_rooms['sys'].'&id='.$res_last_rooms['id'].'">'.$res_last_rooms['nom'].'</a>- ';
print'<a href="emulation.php?url=emu_list&sys='.$res_last_rooms['sys'].'">'.$res_last_rooms['sys'].'</a>';

?>

</li>
<?

}
mysql_close();
?>
