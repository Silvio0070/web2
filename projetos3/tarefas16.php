<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="gen">Generos</label>
    <input type="text" id="gen" name="gen" placeholder="m, f, f...">

    <?php

class generos{
    function mouf(){
        $c = 0;
        $a = $_POST["gen"];
                foreach($a as $i){
                    if($i ==="m"){
                        $c +=1;
                    }
                }

            }
        }
    ?>
</body>
</html>