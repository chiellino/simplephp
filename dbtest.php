<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
    $query = "SELECT * from useres";
    $rs = mysql_query($query);
    while ($row = mysql_fetch_assoc($rs)) {
      echo $row['ID] . " " . $row['name'] . "\n";
    }
    mysql_close();
}
$connection->close();
?>
