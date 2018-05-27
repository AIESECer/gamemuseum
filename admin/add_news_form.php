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

  <h1>Emul-Age - Administration - News - <? if($_GET['do']=='add'){print'Ajouter Une Nouvelle News'; }elseif($_GET['do']=='modify'){print'Modification D\'une News'; }; ?></h1>
  <p><a href="admin_news.php">Retour Administration Des News</a> - <a href="index.php">Retour Index Administration </a></p>

  
<form id="form1" name="form1" method="post" action="add_news.php?do=<? print $_GET['do']; ?>">

<? if($_GET['do']=='modify'){ 
  print'<input type="hidden" name="id" value="'.$_GET['id'].'">';
  
  $sql=mysql_query("SELECT * from news Where id='$_GET[id]' ");
  $res_news=mysql_fetch_array($sql);
  }
  ?>
  <label><br />
  Titre
  <input type="text" name="title" value="<? if($_GET['do']=='modify'){ print $res_news['title'];  } ?>" />
  </label>
  <p>Contenu</p>
  <p>
    <label>
    <textarea name="news" cols="10" rows="6" wrap="virtual" ><? if($_GET['do']=='modify'){ print $res_news['news'];  } ?></textarea>
    </label></p>
  <p>
  
    <label>Auteur
    <input type="text" name="author"  value="<? if($_GET['do']=='modify'){ print $res_news['author'];  } ?>">
    </label>
  </p>
  <p>Options:</p>
  <p>E-Mail de l'auteur : 
    <input type="text" name="author_mail" value="<? if($_GET['do']=='modify'){ print $res_news['author_mail'];  } ?>">
  </p>
  <p>
    <label>Image
    <input type="text" name="img" value="<? if($_GET['do']=='modify'){ print $res_news['img'];  } ?>">
    </label>
    <label>Alignement
    <select name="align">
      <option value="Right">Droite</option>
      <option value="Left">Gauche</option>
    </select>
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
