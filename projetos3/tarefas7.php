<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tarefas7.php" method="post">
        <label for="n">Insira 15 números: </label>
        <input type="text" name="n" id="n">
    </form>

    <?php
    class exercicios{
        function raiz(){
                $i = $_POST["n"];
                $i = explode(",", $i);
                foreach($i as $h){
                    echo sqrt($h);
                    echo "<br>";
                };
        }
    }
    $questoes = new exercicios();
    $questoes -> raiz();
    ?>
</body>
</html>