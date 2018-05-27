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

  <h1>Emul-Age - Administration - Emulation - Emulateurs<? if($_GET['do']=='add'){print'Ajouter Une Nouvelle News'; }elseif($_GET['do']=='modify'){print'Modification D\'une News'; }; ?></h1>
  <p><a href="admin_emulator.php">Retour Administration Des Emulateurs</a> - <a href="index.php">Retour Index Administration </a><p>

  
<form id="form1" name="form1" method="post" action="add_emulator.php?do=<? print $_GET['do'];?>">

<? if($_GET['do']=='modify'){ 
  print'<input type="hidden" name="id" value="'.$_GET['id'].'"/>';
  
  $sql=mysql_query("SELECT * from emulateurs Where id='$_GET[id]' ");
  $res_emulator=mysql_fetch_array($sql);
  }
  ?>
  
  <label><br />
  System:
  <input type="text" name="sys" value="<? if($_GET['do']=='modify'){ print $res_emulator['sys'];  } ?>" />
  </label>
    <label>
	Titre<
    <input name="nom" type="text" value="<? if($_GET['do']=='modify'){ print $res_emulator['name'];  } ?>" size="10" />
    </label></p>
  <p>
  
    <label>Langue
    <input type="text" name="langue"  value="<? if($_GET['do']=='modify'){ print $res_emulator['langue'];  } ?>">
    </label>
  </p>
  <label>Description: 
    <textarea name="description"><? if($_GET['do']=='modify'){ print $res_emulator['description'];  } ?>
    </textarea>
  </label>
  <p>
    <label>Site Officiel:
    <input type="text" name="site" value="<? if($_GET['do']=='modify'){ print $res_emulator['site'];  } ?>">
    </label>
    <label>Lien:
   <input type="text" name="link" value="<? if($_GET['do']=='modify'){ print $res_emulator['link'];  } ?>">
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Envoyer" />
    </label>
    <input type="submit" name="Submit2" value="Retablir" />
  </p>
</form>
</div>
<? mysql_close(); ?>
</body>
</html>
