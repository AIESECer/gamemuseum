<?php 
/* Nom: connexion.php
   Auteur: Yami (Yami_ne1(à)hotmail.com)
   Role: Connexion a la base de données Mysql
   Creer le: Dimanche-25-Mars-2007 a 11:52(GMT)   
*/

//-------Information de connexion a mysql-------//
$host='localhost';//Hote de connexion(localhost)        //
$user='root';//Nom d'user de la base de données    //
$pwd='';//Password de la base de données     //
$base='gamemuseum_db';//Nom de la base de données        //
//-----------------------------------------//

//-----------connexion a mysql------------------------------------------------//
$db=mysql_connect($host,$user,$pwd) or die ("erreur de connexion");          //
//--------------------------------------------------------------------------//

//---selection de la base--------------------------------------------------//
mysql_select_db($base,$db) or die ("Selection ecoue");                    //
//-----------------------------------------------------------------------//

?>
