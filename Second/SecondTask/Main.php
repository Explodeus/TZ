<?php
    if(isset($_POST['name'], $_POST['age'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $arr =  array($name, $age);
        echo json_encode($arr);
    }
?>
<form action="index.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="age" placeholder="Age">
    <input type="submit">
</form>
