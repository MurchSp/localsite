<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trade TM</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Kanit:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<?php 
ob_start(); 
session_start(); 
?>
<?php
require 'steamauth/steamauth.php';
loginButton();
if (isset($_SESSION['steamid'])) {
    require 'steamauth/userInfo.php';
    echo "<a href='steamauth/logout.php'>logout</a>";
}
?>
</body>
</html>