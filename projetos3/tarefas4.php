<?php
        Class exercicios{
            function q4(){
                for($i=1; $i<=20; $i+=1){
                    echo $i*$i ." <br>";
                }
            }
        }
        $questoes = new exercicios();
        $questoes -> q4();
?>