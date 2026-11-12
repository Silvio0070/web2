<?php
    class alturas{
        function alt(){
            $j = 1.5;
            $m = 1.1;
            $a = 0;
            while($j > $m){
                $j += 0.02;
                $m +=0.03;
                $a+=1;
            }
            echo $a;

        }
        }
        $questoes = new alturas();
        $questoes -> alt();
?>