<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administration De Emul-Age</title>
<link href="../css.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="corps">
<h1>Administration De Emul-Age - Emulation - Emulateurs</h1>
<p><a href="add_emulation_form.php?do=add">Ajouter Une Catergorie</a> - <a href="index.php">Retour Index Administration </a></p>
<p>
  <? include('connexion.php');//Ficher de configuration

$sql=mysql_query("SELECT * from emulation order by sys ");
$sql_row=mysql_query("SELECT id from emulation");
$rows=mysql_numrows($sql_row);
print $rows;

while($res=mysql_fetch_array($sql)){
print'<p>';
print'<table width="200" border="1">
  <tr>
    <td>'.$res['id'].'</td>
    <td>'.$res['sys'].'</td>
    <td>'.$res['name'].'</td>
    <td><a href="add_emulation_form.php?do=modify&id='.$res['id'].'">Modifier</a></td>
    <td><a href="delete_emulation.php?id='.$res['id'].'">Supprimer</td>
  </tr>
</table></p>';
}
mysql_close();
?>
  
</p>
</div>
</body>
</html>
