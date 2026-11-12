<?php
        Class exercicios{
            function q3(){
                for($i=5; $i<=5000; $i+=5){
                    echo "$i <br>";
                }
            }
        }
        $questoes = new exercicios();
        $questoes -> q3();
?>