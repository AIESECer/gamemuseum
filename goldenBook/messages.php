<h2>Tous Les Messages
</h2>
<? /* Nom: messages.php
   Auteur: Yami (Yami_ne1(�)hotmail.com)
   Site: Emul-Age(www.emulage.tk)
   Role: afficher les messages que le livre contient
   Creer le: Lundi-04-Juin-2007 a 13:00GMT)   
*/

//informations de connexion a mysql
$host='localhost';
$user='root';
$pwd='';
$base='gamemuseum_db';

$connexion=mysql_connect($host,$user,$pwd);
$base=mysql_select_db($base,$connexion);

$req_limit = mysql_query("Select id from livre");
$resultat = mysql_numrows($req_limit);
$limite_page = '10'; 
$nombre_page = $resultat / $limite_page; 
$nombre_total = ceil($nombre_page); 
$nombre = $nombre_total-1; 

if(isset($_GET['numero_page']) || $_GET['numero_page'] != '0' ) // si la variable num�ro de page a une valeur ou est diff�rente de 0 

{ 
$limite_mysql = $limite_page * $_GET['numero_page']; // on multiplie votre limite par le numero de la page pass�e par l'url


}
else{ // pas de variable numero_page

$limite_mysql = '0'; // la limite est de 0

} 


//la requ�te originale de s�lection des messages

//la requ�te modifi�e de s�lection des messages
$req = mysql_query("SELECT date,pseudo,email,message from livre Order by date_verif Desc Limit $limite_mysql , $limite_page") or die ("erreur requ�te"); 

while($res=mysql_fetch_array($req)){
print'<p>';
print'<span class"sous_titre">Par</span> :'.$res['pseudo'].print' ';
print'<span class"sous_titre">Le'.$res['date'].'</span><br>';
print $res['message'];
print'<br>';
print'</p>';
}
if( $nombre != '0' && empty($_GET['numero_page']))// si le nombre de page n'est pas 0 et si la variable numero_page n'est pas d�finie
{
print '<a href="livre.php?numero_page=1">Page suivante</a>'; // on passe la variable num�ro page � 1
print'<br>';
print'<span class"sous_titre">Pages: </span> ';
for ($i = 0 ; $i<$nombre_page ; $i++)
{
$i2=$i+1;
    print '<a href="livre.php?numero_page=' . $i . '">' . $i2 . '</a> ';
}

}

// dans cette condition, la variable numero_page est incr�ment� et est inf�rieure � $nombre 
elseif($nombre !='0' && isset($_GET['numero_page']) && $_GET['numero_page'] < $nombre)
{
$suivant = $_GET['numero_page'] +1; // on ajoute 1 au num�ro de page en cours 
$back=$_GET['numero_page'] - 1;
print '<a href="livre.php?numero_page='.$suivant.'">Page suivante</a>'; //le lien pour les pages suivantes
print '&nbsp;&nbsp;<a href="livre.php?numero_page='.$back.'">Page pr�c�dente</a>'; // retour page pr�c�dente, ici version javascript 
print'<br>';
print'<span class"sous_titre">Pages: </span> ';
for ($i =0  ; $i<$nombre_page ; $i++)
{
$i2=$i+1;
    print'<a href="livre.php?numero_page=' . $i . '">' . $i2 . '</a> ';
}

} 

// dans cette condition, le lien qui sera affich� lorsque le nombre de page a �t� atteint
elseif( $nombre !='0' && isset($_GET['numero_page']) && $_GET['numero_page'] >= $nombre )
{ 
$back=$_GET['numero_page'] - 1;
print '<a href="livre.php?numero_page='.$back.'">Page pr�c�dente</a>'; 
print'<br>';
print'<span class"sous_titre">Pages: </span> ';
for ($i = 0 ; $i<$nombre_page ; $i++)
{
$i2=$i+1;
    print '<a href="livre.php?numero_page=' . $i . '">' . $i2 . '</a> ';
}
} 
mysql_close();
?>