<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $v1 = $_POST["n1"];
        $v2 = $_POST["n2"];
        $v3 = $v1*$v2;
        echo $v3;
?>
</body>
</html>