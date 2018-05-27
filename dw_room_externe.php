<html>
<head>
<?php
/* Nom: dw_room.php
   Auteur: Yami (Yami_ne1(à)hotmail.com)
   Site: Game Museum(www.gamemuseum.ht.st)
   Role: Affichage des information et telechargementsur le resultat(room)depuis d'autres sites.
   Creer le: Dimanche-26-Mars-2007 a 13:19
   Deniere Modification: 2-Avril-2007
*/

include('connexion.php');//Inclusion du fichier de connexion a mysql

$sql_select_room=mysql_query("SELECT * from roms Where sys='$_GET[sys]' and id='$_GET[id]' ");
$sql_room_sys=mysql_query("SELECT * from emulation where sys='$_GET[sys]' ");
$res_room_sys=mysql_fetch_array($sql_room_sys);
$res_select_room=mysql_fetch_array($sql_select_room);
?>
<link href="css.css" rel="stylesheet" type="text/css" />
<title>Telechargement De La Room  <? print $_GET['sys']?> - <? print $res_select_room['nom']; ?> </title>

<head>
<body>
<div id="corps">
<h1>Emulation-Telechargement de Room  </h1>
<p><?php include('site/pub_grand.php'); ?></p>

<h2><? print ' <img src="images/'.$_GET['sys'].'.gif">'; ?><? print $res_select_room['nom']; ?></h2>
<div align="center"><? print'<img src="images_jeux/'.$res_select_room['img'].'">';  ?></div>
<br />
<div align="justify"><strong>Type:</strong> <? print' '. $res_select_room['type'] ?></div>
<div align="justify"><strong>Langue:</strong> <? print'<img src="images/'.$res_select_room['langue'].'.gif">';  ?></div>
<div align="justify"><strong>Editeur-Developpeur:</strong> <? print' '. $res_select_room['edit'] ?></div>
<div align="justify"><strong>Date Sortie:</strong> <? print ' '.$res_select_room['date'] ?></div>
<div align="center">
  <h2>Telechargement</h2>
  <p><span class="sous_titre">Avertissement: </span><br />
    Pour t&eacute;l&eacute;charger  une room vous devez obligatoirement poss&eacute;der le jeu original, sinon vous &eacute;tes  dans l'ill&eacute;galit&eacute;, ni le webmaster de ce site web ni son hebergeur ne pourront &ecirc;tre  tenus pour responsables de vos actes. Si vos n'acceptez pas cella veillez  fermer cette fen&ecirc;tre.</p>
  <p><? print '<a href="'.$res_select_room['link'].'">[ Telecharger  la Room]</a>'; ?> <br />Pour plus de rooms rendez vous sur  <a href="www.emulage.ht.st">Emul-Age</a></p>
</div>
<div>
  <h2>Mettre cette room en telechargement depuis votre site:<br />
    <input type="text" name="textfield"  value="<?php print 'http://membres.lycos.fr/emulage/dw_room_externe.php?sys='.$_GET['sys'].'&id='.$_GET['id']; ?>" size="60" />
  </h2>
</div>
<div align="center">Toute L'emulation sur <a href="http://www.emulage.ht.st">Emul-Age</a></div>
</div>
<? mysql_close(); ?>
</body>
</html>