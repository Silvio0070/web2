<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tarefas10.php" method="post">
        <label for="n">Insira números: </label>
        <input type="text" name="n" id="n">
    </form>

    <?php
    class exercicios{
        function umaduzentos(){

                $m = 0;
                $c = 0;
                $i = $_POST["n"];
                $i = explode(",", $i);
                foreach($i as $h){
                    if($h >100 && $h < 200){
                        $c +=1;
                    } else if($h==0){
                    echo ($c);
                    echo "<br>";
                    }
                };
        }
    }
    $questoes = new exercicios();
    $questoes -> umaduzentos();
    ?>
</body>
</html>