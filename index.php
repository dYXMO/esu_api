<?php
include('./config.php');
include('./list.php');
$type = $_GET['type'];
$esu_word = $esu_list[rand(0,$esu_list_num - 1)];
if ($esu_mode_base64 == true) {
    $esu_word = base64_encode($esu_word);
}
switch ($type) {
    case 'js':
        $esu_word = 'var esu_word="'.$esu_word.'";';
        break;
    case 'php':
        $esu_word = '$esu_word="'.$esu_word.'";';
        break;
    default:
        break;
}
echo $esu_word;
?>