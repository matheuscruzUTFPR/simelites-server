<?php

include "../inc/dbinfo.inc";

$connectionString = "host=" . DB_SERVER . " port=" . DB_PORT . " user=" . DB_USERNAME . " password=" . DB_PASSWORD . " dbname=" . DB_DATABASE . "";
//$db = pg_connect("host=localhost port=5432 dbname=tcc user=postgres password=postgres");
$db = pg_connect($connectionString);

//"host=" . DB_SERVER . " port= 5432 user=" DB_USERNAME, " password=" . DB_PASSWORD . " dbname=" . DB_DATABASE . "") or die("Não foi possível conectar");
$result = pg_query($db, "SELECT * FROM mytable");
$row = pg_fetch_assoc($result);
while ($row = pg_fetch_assoc($result)) {
    $combined[] = $row;
}
echo json_encode($combined);
//echo DB_SERVER;
//var_dump($combined);
?>       