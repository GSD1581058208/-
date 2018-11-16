<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/11/16
 * Time: 8:32
*/
function week($str){
    $sr = chunk_split($str,'1',',');
    $sr = rtrim($tr,',');
    $arr = explode(',',$sr);
    $cnt = array_count_values($arr);
    foreach($cnt as $key=>$val){
        if ($val==1){
            return stripos($str,$key);
        }
    }
    return -1;
}