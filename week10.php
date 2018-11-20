<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/11/20
 * Time: 8:24
 */
echo NumberOf1(10);
function NumberOf1($n){
    return substr_count(decbin($n),"1");
}