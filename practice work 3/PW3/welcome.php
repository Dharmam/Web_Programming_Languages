<?php
session_start();
echo "<h3>Hello : ".$_SESSION['fullname']." </h3>";

echo "<h3>Your Power Animal:</h3>";
echo "<img src = img/" .$_SESSION['power_animal'].">";
?>