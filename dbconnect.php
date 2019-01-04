<?php
// use separate dbconnect.php to add security and condense code
$h = 'localhost:3306';
$u = 'root';
$p = '';
$dbname = 'enable';
$mysqli = new mysqli($h, $u, $p, $dbname);
if ($mysqli->connect_errno) {
    echo "Connect failed" . $mysqli->connect_error;
    exit();
}

?>
