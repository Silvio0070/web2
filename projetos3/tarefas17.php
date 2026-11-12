<?php
    class paises{
        function crescimento(){
            $a = 5000000;
            $c = 0;
            $b = 7000000;
            while($b > $a){
                $a +=  $a*(3/100);
                $b +=  $b*(3/100);
                $c +=1;
                }
            echo $c . "anos ";
        }
    }
        $questoes = new paises();
        $questoes -> crescimento();
?>