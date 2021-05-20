<?php
session_start();
echo "<h1>Welcome ";
echo $_SESSION["email"];
echo "Login Successfull </h1>";
?>

<html>
    <a href="Home.html">Click me</a>
</html>