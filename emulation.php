<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>
<? 
include('connexion.php');
if($_GET['url']=='dw'){
$sql_titre_dw_room=mysql_query("SELECT * from roms Where sys='$_GET[sys]' and id='$_GET[id]' ");
$res_titre_dw_room=mysql_fetch_array($sql_titre_dw_room);
print'Telechargement de Rooms '.$res_titre_dw_room['sys'] .': '.$res_titre_dw_room['nom'] .' ~ Emul-Age ~ ';
}
elseif($_GET['url']=='emu_list'){
$sql_titre_emu_liste=mysql_query("SELECT * from emulation where sys='$_GET[sys]' ");
$res_titre_emu_liste=mysql_fetch_array($sql_titre_emu_liste);
print'Emulation '.$res_titre_emu_liste['sys'].' Rooms et Emulateurs  ~Emul-Age~ ';
}
else{
print'Toute L\'emulation console ~Emul-Age~';
}
mysql_close();

?>
</title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="760" border="0" align="center" cellpadding="0" cellspacing="1">
  <!--DWLayoutTable-->
  <tr>
    <td height="142" colspan="2" valign="top"><div id="en_tete"><img src="images/dev-rpg.gif" width="995" height="160" /></div>  
    </td>
  </tr>
  <tr>
    <td height="41" colspan="2" valign="middle"><?php include('nav_menu.php'); ?></td>
  </tr>
  <tr>
    <td width="120" height="460" valign="top">
	  <div id="menu"><?php include('main_menu.php'); ?>
                  </div></td>
    <td width="637" valign="top">
	  <div id="corps">
	    <?php 
  
if($_GET['url']=='emulation'){
include('emulation/emu_menu.php');
}
elseif($_GET['url']=='emu_list'){
include('emulation/emulation_liste.php');
}
elseif($_GET['url']=='dw'){
include('emulation/dw_room.php');
}
elseif($_GET['url']=='faq'){
include('emulation/faq.php');
}
elseif($_GET['url']=='search_result'){
include('emulation/search_result.php');

}
elseif($_GET['url']=='help'){
include('emulation/help_emul.php');

}
else{
include('emulation/emu_menu.php');
}

?>
            </div></td>
  </tr>
    

  <tr>
    <td height="86" colspan="2" valign="top"><div id="pied_de_page">
	
      <p align="center"><span class="sous_titre">Webmaster Yami </span>(<a href="mailto:yami_ne1@hotmail.com">yami_ne1@hotmail.com</a>)<br />
        <a href="#top">[Remonter]</a><br />
Copyright &copy;&quot;Emul-Age&quot; 2007 Tous Droits R&eacute;serv&eacute;s <br />
Merci de  respecter notre travail en ne proposant pas nos fichier en telechargement directe depuis vos sites mais en utilisant le lien propos&eacute; pour chaque room lequel est fait justement pour cela. <br />
      </p>
    </div></td>
  </tr>
</table>
<script language=javascript> 
//puv lycos
function kill_ad() 
{ 
  window.top.document.body.cols = "*,0"; 
  setTimeout("kill_ad()",10); 
} 
function setInterval(x,y) 
{ 
  return 0; 
} 
window.setTimeout("kill_ad()",10); 
</script> 
</body>
</html>
