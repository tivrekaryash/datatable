<?php

// file to set connection
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "hrms_proto_db";

$con = new mysqli($servername, $username, $password, $dbname);

if($con->connect_error)
{
    die("connection failed: ". $con->connect_error  );
}
?>