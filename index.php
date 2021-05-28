<?php
/*
*ProjectName:esu_api
*Author:dYXMO
*Site:www.dyxmo.work
*Repository:https://github.com/dYXMO/esu_api
*/
$url = $_SERVER['PHP_SELF'];
$arr = explode( '/' , $url );

if (file_exists('./Core/'.$arr[count($arr)-1].'.php') == true){
require('./Core/'.$arr[count($arr)-1].'.php');
}else{
require('./Core/error.php');
}
