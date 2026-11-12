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
                <th>Fahrenheit</th>
                <th>Centigrados</th>
            </tr>";

                for($i=50; $i<=150; $i+=1){
                    $b = (5*($i-32)/9);
                    
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