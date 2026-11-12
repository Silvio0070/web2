<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tarefas8.php" method="post">
        <label for="n">Insira números: </label>
        <input type="text" name="n" id="n">
    </form>

    <?php
    class exercicios{
        function raiz(){

                $m = 0;
                $c = 0;
                $i = $_POST["n"];
                $i = explode(",", $i);
                foreach($i as $h){
                    if($h >0){
                        $c +=1;
                        $m = $m + $h;
                    } else{
                    echo ($m/$c);
                    echo "<br>";
                    }
                };
        }
    }
    $questoes = new exercicios();
    $questoes -> raiz();
    ?>
</body>
</html>