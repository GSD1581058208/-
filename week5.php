<?php

    function Sum_Solution($n){
        if ($n>1){
            $sum = $n+Sum_Solution($n-1);
        }else{
            $sum = $n;
        }
        return $sum;
    }
    $n = 6;
    echo $n."相加的值为：".Sum_Solution($n);

