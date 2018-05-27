<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administration De Emul-Age</title>
<link href="../css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<? include('connexion.php'); ?>
<div id="corps">

  <h1>Emul-Age - Administration - Categories D'Emulation- <? if($_GET['do']=='add'){print'Ajouter Une Nouvelle Categorie'; }elseif($_GET['do']=='modify'){print'Modification D\'une Categorie'; }; ?></h1>
  <p><p><a href="admin_emulation.php">Retour Administration Des Categories</a> - <a href="index.php">Retour Index Administration </a></p></p>
  <p>

</p>

  
<form id="form1" name="form1" method="post" action="add_emulation.php?do=<? print $_GET['do'];?>">

<? if($_GET['do']=='modify'){ 
  print'<input type="hidden" name="id" value="'.$_GET['id'].'"/>';
  
  $sql=mysql_query("SELECT * from emulation Where id='$_GET[id]' ");
  $res_emulation=mysql_fetch_array($sql);
 
  }
  ?>
  <label><br />
  System:
  <input type="text" name="sys" value="<? if($_GET['do']=='modify'){ print $res_emulation['sys'];  } ?>" />
  </label>
    <label>
	Titre
    <input name="nom" type="text" value="<? if($_GET['do']=='modify'){ print $res_emulation['name'];  } ?>" size="10" />
    </label></p>
  <label>Description: 
    <textarea name="description"><? if($_GET['do']=='modify'){ print $res_emulation['des'];  } ?>
    </textarea>
  </label>
  <p>
    <label>
    <input type="submit" name="Submit" value="Envoyer" />
    </label>
	<label>
    <input type="submit" name="Submit2" value="Retablir" />
	</label>
  </p>
</form>
</div>
<? mysql_close(); ?>
</body>
</html>
