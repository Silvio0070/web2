<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tarefas.php" method="post">
        <h1>Tarefas</h1>
        <label for="num">Selecione o número</label>
        <input min="1" type="number" name="num" id="num">
        <input type="submit" value="ENVIAR">
    </form>
    <?php
    $luqi = $_POST["num"];
        Class exercicios{


            function q1(){
                for($i=100; $i>=0; $i-=1){
                    echo "$i <br>";
                }
            }

            

        }

        $questoes = new exercicios();
    if($luqi == 1){
        $questoes-> q1();
    }
        
    ?>
</body>
</html>
