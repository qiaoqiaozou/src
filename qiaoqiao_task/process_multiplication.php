<?php
$title = "the multiplication";
include "header.php";
?>
<div class = "container">
    <div class = "my-4"></div>
    <?php
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    echo "$number1 * $number2 = " .$number1*$number2;
    ?>
    <div class = "my-4"></div>
</div>
<?php
include "footer.php";
?>