<?php
        Class exercicios{
            function q5(){
                $s = 0;
                for($i=1; $i<=100; $i+=1){
                    echo "$i <br>";
                    $s += $i;
                    }
                    echo $s;
                }
        }
        $questoes = new exercicios();
        $questoes -> q5();
?>