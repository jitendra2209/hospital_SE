<?php

$servername= "localhost";

$username= "root";

$password = "";

$db_name = "hms";

$conn = mysqli_connect($sname, $username, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>