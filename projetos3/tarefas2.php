<?php
        Class exercicios{
            function q2(){
                for($i=0; $i<=200; $i+=2){
                    echo "$i <br>";
                }
            }
        }
        $questoes = new exercicios();
        $questoes -> q2();
?>