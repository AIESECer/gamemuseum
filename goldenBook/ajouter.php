<link href="../css.css" rel="stylesheet" type="text/css" />
<div id="corps">
<h1>Livre D'or d'Emul-Age</h1>
<?php 

/* Nom: ajouter.php
   Auteur: Yami (Yami_ne1(à)hotmail.com)
   Site: Emul-Age(www.emulage.tk)
   Role: ajouter des messag au liver d'or
   Creer le: Lundi-04-Juin-2007 a 13:00GMT)   
*/

//informations de connexion a mysql
$host='localhost';
$user='root';
$pwd='';
$base='gamemuseum_db';

//verification du formulaire
if(empty($_POST['pseudo']) || empty($_POST['message'])){
print'<span class"sous_titre">Erreure dans la saisie du formulaire veillez reessayer</span>';
print'<br><a href="livre.php"><<Retour</a>'; 
include('form.php');

}
else{

$date_verif=date("Y-m-d H:i");
$date=date("d-m-y");
$pseudo=addslashes(htmlspecialchars($_POST['pseudo']));
$email=addslashes(htmlspecialchars($_POST['email']));
$message=addslashes(htmlspecialchars($_POST['message']));

$connexion=mysql_connect($host,$user,$pwd);
$base=mysql_select_db($base,$connexion);

mysql_query("INSERT into livre VALUES('','$date_verif','$date','$pseudo','$email','$message')") or die("Erreure requete");

mysql_close();

header('location:http:.../livre.php');
}
?>
</div>