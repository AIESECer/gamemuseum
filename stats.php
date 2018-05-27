<?
/***********************************************************************************
*   SCRIPT        :   AITSH Statistics
*   VERSION       :   1.0
*   AUTHOR        :   Advanced IT Services Holland
*   EMAIL         :   info@aitsh.com
*   DATE          :   09/12/1999 
*   COUNTRY       :   The Netherlands, Europe
*   COPYRIGHT     :   You are free to modify this script,
                      as long as you keep this header in your script. 
*   DESCRIPTION   :   A page access-statistics that uses a MySQL-database 
*   COMMENTS      :   Simple to set-up and to configure/adjust it 
*   INSTALLATION  :   Create a MySQL table, for example like this:
                      CREATE TABLE statistics (URL_STR VARCHAR(250), VISITOR VARCHAR(250), IP VARCHAR(250),
                      TIMES VARCHAR(250));
                      Then, insert the following in the file(s) that you want to use
  */                 


                      $stats_host = "localhost";
                      $stats_user = "root";
                      $stats_password = "";
                      $stats_database = "gamemuseum_db ";
                      $stats_table = "statistics";

                      mysql_connect("$stats_host","$stats_user","$stats_password") or die("Can't connect to the SQL-server");
                      mysql_select_db("$stats_database");
                      $location=getenv("REQUEST_URI");
                      $remote_host=getenv("REMOTE_HOST");
                      $remote_ip=getenv("REMOTE_ADDR");

                      $query = "SELECT * FROM $stats_table WHERE VISITOR = '$remote_host' && URL_STR = '$location'";
                      $result = MYSQL_QUERY($query);
                      $number = MYSQL_NUMROWS($result); 

                      if($number == 0) {
                      $query2 = "INSERT INTO $stats_table VALUES('$location', '$remote_host', '$remote_ip', '1')";
                      $result2 = MYSQL_QUERY($query2); }
                      else {
                      $z = 0;
                      $old_times = mysql_result($result,$z,"TIMES");
                      $new_times = $old_times+1;
                      $query2 = "UPDATE $stats_table SET TIMES = '$new_times' WHERE VISITOR = '$remote_host' && URL_STR = '$location'";
                      $result2 = MYSQL_QUERY($query2); }
					  
?>