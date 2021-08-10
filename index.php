<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
<div>
    <h1>Calculator</h1>
</div>

<p>
<form method="get" action="index.php">
    <input name="v1">
    <select name="action">
        <option value="plus">+</option>
        <option value="minus">-</option>
    </select>
    <input name="v2">
    <input type="submit" name="submit" value="Submit"/>
</form>
</p>

<p>
<?php

    if(isset($_GET["submit"])){
        $v1 = $_GET["v1"];
        $v2 = $_GET["v2"];

        if($_GET["action"]=="plus"){
            $result = $v1+$v2;
            echo "$v1 + $v2 ";
        }else{
            $result = $v1-$v2;
            echo "$v1 - $v2 ";
        }
        echo "= $result";
    }

?>
</p>

</body>
</html>