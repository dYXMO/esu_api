<?php
/*引入文件*/
include('./config.php');
include('./list.php');

/*获取请求api类型*/
$type = $_GET['type'];
/*获取定义变量名*/
$var_name = $_GET['var_name'];

/*随机抽取*/
$esu_word = $esu_list[rand(0,$esu_list_num - 1)];

/*base模式*/
if ($c['base64_mode'] == true) {
    $esu_word = base64_encode($esu_word);
}
/*自定义变量判断是否为空*/
if ($var_name == null) {
    /*如果为空 就默认为esu_word*/
    $var_name = $c['default_var_name'];
}

/*api类型判断*/
switch ($type) {
    case 'js':
        $esu_word = 'var '.$var_name.'="'.$esu_word.'";';
        break;
    case 'php':
        $esu_word = '$'.$var_name.'="'.$esu_word.'";';
        break;
    case 'iapp':
        $esu_word = 'sss '.$var_name.' = "'.$esu_word.'"';
        break;
    default:
        break;
}

/*输出*/
echo $esu_word;
?>