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
  <h1>Administration De Emul-Age - Room -Ajouter Une nouvelle Room</h1>
  <p><a href="admin_rooms.php">Retour Administration Des News</a> - <a href="index.php">Retour Index Administration </a></p>
  
  
  <form id="form1" name="form1" method="post" action="add_room.php?do=<? print $_GET['do']; ?>">
  <? if($_GET['do']=='modify'){ 
  print'<input type="hidden" name="id" value="'.$_GET['id'].'"/>';
  
  $sql=mysql_query("SELECT * from roms where id='$_GET[id]' ");
  $res_rooms=mysql_fetch_array($sql);
  }
  ?>
  
  
  <label>System
  :
  <input name="sys" type="text" id="sys" value="<? if($_GET['do']=='modify'){ print $res_rooms['sys'];  } ?>"/>
  </label>
  <p>
    <label>Nom:
    <input name="nom" type="text" id="nom" value="<? if($_GET['do']=='modify'){ print $res_rooms['nom'];  } ?>" />
    </label>
  </p>
  <p>
    <label>Type:
    <input name="type" type="text" id="type" value="<? if($_GET['do']=='modify'){ print $res_rooms['type'];  } ?>" />
    </label>
  </p>
  <p>
    <label>Langue:
    <input name="langue" type="text" id="langue" value="<? if($_GET['do']=='modify'){ print $res_rooms['langue'];  } ?>" />
    </label>
  </p>
  <p>
    <label>Date:
    <input name="date" type="text" id="date" value="<? if($_GET['do']=='modify'){ print $res_rooms['date'];  } ?>" />
    </label>
  </p>
  <p>
    <label>Edit-Developpeur:
    <input name="edit" type="text" id="edit" value="<? if($_GET['do']=='modify'){ print $res_rooms['edit'];  } ?>"/>
    </label>
  </p>
  <p>
    <label>Image:
    <input name="img" type="text" id="img" value="<? if($_GET['do']=='modify'){ print $res_rooms['img'];  } ?>" />
    </label>
  </p>
  <p>
    <label>Lien
    <input name="link" type="text" id="link" value="<? if($_GET['do']=='modify'){ print $res_rooms['link'];  } ?>"/>
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Ajouter la room/Modifier" />
    </label>
  </p>
</form>
<p>&nbsp;</p>
<? mysql_close(); ?>
</div>
</body>
</html>
