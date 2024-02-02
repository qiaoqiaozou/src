<?php
$title = "Voting";
include "header.php";
?>
<div class = "container">
    <div class = "my-4"></div>
    <?php
    $age = $_POST['age'];
    $name = $_POST['name'];
    if ($age >=18){
      echo "Hello $name ! You are eligible for voting." ; 
    }
    else{
        echo "Sorry $name, you are not eligible for voting." ; 
    }
    ?>
    <div class = "my-4"></div>
</div>
<?php
include "footer.php";
?>