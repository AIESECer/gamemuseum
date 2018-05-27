<h1>Emulation - Toute l'emulation
</h1>
<p><?php include('site/pub_grand.php'); ?>&nbsp;</p>
<h2><img src="images/recherche.png" width="21" height="21" /> Rechercher une room</h2>
<p><?php include('emulation/search_form.php'); ?></p>

<?php 
/* Nom: emu_menu.php
   Auteur: Yami (Yami_ne1(à)hotmail.com)
   Site:
   Role: Menu des categorie d'emulation du site
   Creer le: Dimanche-25-Mars-2007 a 12:00
   Derniere Modification: 27-Mars-2007  
*/

include('connexion.php');//Inclusion du fichier de connexion a mysql

$sql=mysql_query("SELECT * from emulation order by name asc");//requete de selection
$sql_num=mysql_query("SELECT id from emulation");

//Affichage des resultats-----------------------------------------------------------//
print'<h2><img src="images/all.png" /> Toutes les categories</h2>';
print'<ul>';
while($res=mysql_fetch_array($sql)){//Transoformation de la requte en tableau
//affichae des resultats(categories)
print'<li><img src="images/'.$res['sys'].'.gif"><a href="emulation.php?url=emu_list&sys='.$res['sys'].'">'.$res['name'].'</a></li>';
print'<br>';
}
print'</ul>';
//--------------------------------------------------------------------------------//


mysql_close();//Femmeture de la connexion a la base
?>