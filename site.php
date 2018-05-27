<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>~Emul-Age~ Toute l'emulation console Room et emulateurs.</title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="760" border="0" align="center" cellpadding="0" cellspacing="1">
  <!--DWLayoutTable-->
  <tr>
    <td height="142" colspan="2" valign="top"><div id="en_tete"><img src="images/dev-rpg.gif" width="995" height="160" /></div>
    </tr>
   <tr>
    <td height="41" colspan="2" valign="middle"><?php include('nav_menu.php'); ?> </td>
  </tr>
  <tr>
    <td width="120" height="418" valign="top">
	<div id="menu">
<?php include('main_menu.php'); ?>
</div>
&nbsp;</td>
    <td width="640" valign="top">
	<div id="corps">
<?php 
if($_GET['url']=='contact'){
include('site/contact.php');
}
elseif($_GET['url']=='link'){
include('site/link.php');
}
elseif($_GET['url']=='help'){
include('site/help.php');
}
?>
  </div>
     </td>
  </tr>
  
  <tr>
    <td height="40" colspan="2" valign="top"><div id="pied_de_page">
<p><span class="sous_titre">Webmaster Yami </span>(<a href="mailto:yami_ne1@hotmail.com">yami_ne1@hotmail.com</a>)<br />
  <a href="#top">[Remonter]</a><br />
Copyright &copy;&quot;Emul-Age&quot; 2007 Tous Droits R&eacute;serv&eacute;s <br />
Merci de  respecter notre travail en ne proposant pas nos fichier en telechargement directe depuis vos sites mais en utilisant le lien propos&eacute; pour chaque room lequel est fait justement pour cela. </p>
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
