<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/11/22
 * Time: 8:21
 */

echo CountSteps(1,1);
function CountSteps($x,$y){
    if($x==0 && $y==0){
        return 0;
    }else if($x==0 || $y==0){
        return 1;
    }
    return CountSteps($x,$y-1)+CountSteps($x-1,$y);
}
