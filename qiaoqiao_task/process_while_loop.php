<?php
$title = "Voting";
include "header.php";
?>
<div class = "container">
    <div class = "my-4"></div>
    <?php
    $number= $_POST['number'];
    $n=1;
   while($n <= $number){
      echo $n++. "<br/>";
    }
    ?>
    <div class = "my-4"></div>
</div>
<?php
include "footer.php";
?>