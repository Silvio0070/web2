<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        class exercicios{
            function convertterr(){

            echo "    <table border='1' cellspacing='0' width='100%' >
            <tr>
                <th>POLEGADAS</th>
                <th>Centimetros</th>
            </tr>";

                for($i=0; $i<=20; $i+=1){
                    $b = $i*2.54;
                    
                    echo "<tr><td>$i</td><td>$b</td></tr>";

                    }
                    echo "    </table></form>";
            }
                }
            
        $questoes = new exercicios();
        $questoes -> convertterr();
    ?>
</body>
</html>