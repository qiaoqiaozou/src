<?php
$title="Exercise 3: Variable, Strings & Operators";
include "header.php";
?>
<div class = "container">
<h3>Form Creation: Create a simple HTML form to collect the user's Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h3>
<div class="my-4"></div>
<form action = "process.php" method = "post" class = "row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" name = "firstname" >
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name = "lastname">
  </div>
  <div class="col">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
<div class="my-4"></div>
<table class="table">
        <tr><th>S.n.</th> <th>Name</th> <th>Grade</th></tr>
        <tr>
            <td>1</td>
            <td>Jone</td>
            <td>5</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td>4</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bob</td>
            <td>5</td>
        </tr>
</table>

<?php
$str1 = "Hello";
$str2 = "World";
echo "The length of $str1 and $str2 is : ".strlen($str1.$str2);
echo "<br>";

$number1 = 298;
$number2 = 234;
$number3 = 46;
echo "$number1 + $number2 + $number3 = ".$number1 + $number2 + $number3;
echo "<br>";

echo "The browser is :" .$_SERVER['HTTP_USER_AGENT'];
?>
</div>

<?php
include "footer.php";
?>