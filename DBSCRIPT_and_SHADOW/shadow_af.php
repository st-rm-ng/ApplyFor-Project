<?php

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPWD", "");
define("DBNAME", "applyfor");

$conn = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);

mysqli_set_charset($conn, "utf-8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . " " . mysqli_connect_errno());
}