<?php
$title = "Exercise 4: Control flow and loops";
include "header.php";
?>


<div class = "container">
    <p><strong>4-2:If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</strong></p>
    <div class = "my-4"></div>
<form action = "process_voting.php" method = "post" class = "row" name = "form1">
  <div class="col">
    <input type="text" class="form-control" placeholder="Name" aria-label="name" name = "name" >
  </div>
  <div class="col">
    <input type="integer" class="form-control" placeholder="Age" aria-label="age" name = "age">
  </div>
  <div class="col">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
<div class = "my-4"></div>
<p><strong>4-3:Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</strong></p>
<?php
$month = date("F");
switch($month){
    case " August":
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "<span style='color: red;'>Not August, this is Month-name so I don't have any holidays.</span> ";    
}
?>
<div class = "my-4"></div>
<p><strong>4-4:Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</strong></p>
<form action = "process_multiplication.php" method = "post" class = "row" name = "form2">
  <div class="col">
    <input type="integer" class="form-control" placeholder="Number1" aria-label="number1" name = "number1" >
  </div>
  <div class="col">
    <input type="integer" class="form-control" placeholder="Number2" aria-label="number2" name = "number2">
  </div>
  <div class="col">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
<div class = "my-4"></div>
<p><strong>4-5:Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</strong></p>

<form  action = "process_while_loop.php" method = "post"class="input-group mb-4" name = "form3">
  <span class="input-group-text">Input A Number</span>
  <input type="integer" class= "input-group-text"aria-label="ask for a number" aria-describedby="input_number" name="number">
  <br/>
 <button type="submit" class="btn btn-primary">Sign in</button>
</form>

<p><strong>4-6.Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript")</strong></p>
<?php
$myarray=array("HTML","CSS","PHP","JavaScript");
print_r($myarray);
foreach($myarray as $value){
    echo "<br/><br/><span style='color: red;'>$value</span>";
}
?>
</div>

<?php
include "footer.php";
?>