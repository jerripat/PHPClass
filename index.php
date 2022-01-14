<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "jerripat";
$db_pass = "Dadio1005";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {

    echo mysqli_connect_error();
    exit;
}
else {
    echo "Connected Successfully";
}
?>