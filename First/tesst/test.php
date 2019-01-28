<?php
    if(isset($_POST['1number'], $_POST['2number'])){
        $number = S_POST['1number'];
        $scndnumber = $_POST['2number'];
        $sum = $number+$scndnumber;
        echo "{$sum}";
    }
    if(isset($_POST['1number'])){
        $num1 = $_POST['1number'];
        $num1*= $num1;
        echo "{$num1}";
    }

?>
<form action="index.php" method="post">
    <input type="number" name="1number" placeholder="First Number">
    <input type="number" name="2number" placeholder="Second Number">
    <input type="submit">
</form>
