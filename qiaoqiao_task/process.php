<?php
$title = "Welcome site";
include "header.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
echo "Hello " .$firstname." " .$lastname.", you are welcome to my site.";
include "footer.php"
?>