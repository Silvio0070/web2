<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $linha = $_POST['linha'];
        $coluna = $_POST['coluna'];
        $texto = $_POST['dados'];

        function tabela($linha, $coluna, $texto){
            echo "<table border='1' cellspacing='0' width='100%' >";
            for ($i=0; $i<$coluna; $i+=1){
                echo "<tr>";
                for ($j=0; $j<$linha; $j+=1){
                    echo "<td> ". $texto ."</td>";
                    }
                echo "</tr>";
            }
            echo '</table>';
            }
            tabela($linha, $coluna, $texto)
            
    ?>
</body>
</html>