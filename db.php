<?php
$db_name = "movieflix";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

ini_set('default_charset', 'UTF-8');
$conn = new PDO("mysql:dbname=". $db_name .";host=". $db_host, $db_user, $db_pass);
$conn->query("SET NAMES utf8");

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);