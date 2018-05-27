
                     
<? 
$host = "localhost";
$user = "root";
$password = "";
$database = "gamemuseum_db";
$table = "statistics";
$page_title = "Emu-Age Statistics";
?>
<HTML>
<HEAD>
<TITLE><?php echo $page_title; ?></TITLE>
</HEAD>
<BODY BGCOLOR="#FFFFFF" LINK="#000000">  
<FONT FACE="Verdana" SIZE="-2">                                                                                                                                             
<?
                                                                    
/* connect to the database */                                  
mysql_pconnect("$host","$user","$password") or die("Can't connect to the SQL-server");
mysql_select_db("$database");

$query = "SELECT * FROM $table ORDER BY VISITOR, URL_STR";

$result = MYSQL_QUERY($query);

/* How many of these users are there? */

$number = MYSQL_NUMROWS($result);

/* Print these results to the screen in a nice format */

$i = 0;


IF ($number == 0) :

PRINT "A little problem...(:-";

ELSEIF ($number > 0) :

$z = 0;
WHILE ($z < $number):
$time = mysql_result($result,$z,"TIMES");
$total_time = $total_time + $time;
$z++;
ENDWHILE;

?>
<I><CENTER><?php echo $total_time; ?> accessess</CENTER></I><BR><BR>
<?

PRINT "<TABLE ALIGN=CENTER WIDTH=600 BORDER=0 VALIGN=TOP CELLSPACING=1 CELLPADDING=3>\n";
PRINT "<TR>\n<TD BGCOLOR=\"#6699CC\" WIDTH=\"180\"><FONT FACE=Verdana SIZE=1><B>URL:</B></FONT></TD>\n<TD BGCOLOR=\"#6699CC\" WIDTH=\"180\"><FONT FACE=Verdana SIZE=1><B>Visitor:</B></FONT></TD>\n<TD BGCOLOR=\"#6699CC\" WIDTH=\"60\"><FONT FACE=Verdana SIZE=1><B>IP:</B></FONT></TD>\n<TD BGCOLOR=\"#6699CC\" WIDTH=\"120\"><FONT FACE=Verdana SIZE=1><B>Times:</B></FONT></TD>\n</TR>";

WHILE ($i < $number):

$url = mysql_result($result,$i,"URL_STR");
$visitor = mysql_result($result,$i,"VISITOR");
$ip = mysql_result($result,$i,"IP");
$times = mysql_result($result,$i,"TIMES");

if($url == "") {
$url = "&nbsp;"; }
if($visitor == "") {
$visitor = "&nbsp;"; }
if($ip == "") {
$ip = "&nbsp;"; }
if($times == "") {
$times = "&nbsp;"; }

PRINT "\n<TR>\n<TD BGCOLOR=\"#99CCFF\" WIDTH=\"180\"><FONT FACE=Verdana SIZE=1><B>$url</B></FONT></TD>\n<TD BGCOLOR=\"#99CCFF\" WIDTH=\"180\"><FONT FACE=Verdana SIZE=1><B>$visitor</B></FONT></TD>\n<TD BGCOLOR=\"#99CCFF\" WIDTH=\"60\"><FONT FACE=Verdana SIZE=1><B>$ip</B></FONT></TD>\n<TD BGCOLOR=\"#99CCFF\" WIDTH=\"120\"><FONT FACE=Verdana SIZE=1><B>$times</B></FONT></TD>\n</TR>\n";

$i++;

ENDWHILE;

PRINT "</TABLE>\n</CENTER>\n";

ENDIF;
?>
<BR><SMALL><CENTER>Script by <A HREF="http://www.aitsh.com/" onMouseOver="window.status='Script by Advanced IT Services Holland';return true" onMouseOut="window.status='';return true" TITLE="Script by Advanced IT Services Holland">Advanced IT Services Holland</A></CENTER></SMALL>
</FONT>
</BODY>
</HTML>