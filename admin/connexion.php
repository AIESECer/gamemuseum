<?php 
/* Nom: connexion.php
   Auteur: Yami (Yami_ne1(�)hotmail.com)
   Pour: Emul-Age www.emulage.tk
   Role: Connexion a la base de donn�es Mysql
   Creer le: Vendredi-07-Aout-2007 
*/

//-------Information de connexion a mysql-------//
$host='localhost';//Hote de connexion(localhost)        //
$user='root';//Nom d'user de la base de donn�es    //
$pwd='';//Password de la base de donn�es     //
$base='gamemuseum_db';//Nom de la base de donn�es        //
//-----------------------------------------//

//-----------connexion a mysql------------------------------------------------//
$db=mysql_connect($host,$user,$pwd) or die ("erreur de connexion");          //
//--------------------------------------------------------------------------//

//---selection de la base--------------------------------------------------//
mysql_select_db($base,$db) or die ("Selection ecoue");                    //
//-----------------------------------------------------------------------//

$limit_news=5;//nombre de news par page

?>