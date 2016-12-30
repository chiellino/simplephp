<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");


$db_link = mysqli_connect (
                     $dbhost, 
                     $dbuser, 
                     $dbpwd, 
                     $dbname
                    );
 
$sql = "SELECT * FROM users";
 
$db_erg = mysqli_query( $db_link, $sql );
if ( ! $db_erg )
{
  die('query failure: ' . mysqli_error());
}
 
echo '<table border="1">';
while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
{
  echo "<tr>";
  echo "<td>". $zeile['id'] . "</td>";
  echo "<td>". $zeile['name'] . "</td>";
  echo "</tr>";
}
echo "</table>";
 
mysqli_free_result( $db_erg );

?>
