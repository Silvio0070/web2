<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tarefas11.php" method="post">
        <label for="n">Insira a profissão: </label>
        <input type="text" name="n" id="n">
    </form>

    <?php
    class exercicios{
        function profissoes(){

                $m = 0;
                $c = 0;
                $i = $_POST["n"];
                $i = explode(",", $i);
                foreach($i as $h){
                    if($h == "dentista"){
                        $c +=1;
                    } else if($h=="FIM"){
                    echo ($c). "sao dentistas";
                    echo "<br>";
                    }
                };
        }
    }
    $questoes = new exercicios();
    $questoes -> profissoes();
    ?>
</body>
</html>