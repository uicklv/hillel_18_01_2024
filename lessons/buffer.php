<?php

//echo " Початок обробки ... <br>";
//
//for ($i = 1; $i <= 10; $i++) {
//    echo "Крок $i <br>";
//    flush();
//    sleep(1);
//}
//
//echo " Завершення...<br>";


//ob_start();
//
//echo "Some text";
//
//$content = ob_get_clean();
//
//var_dump($content);
//
//ob_get_contents();
//
//ob_end_clean();
//
//echo "Some text 2";
//
//echo $content;

//$user = [];
//ob_start();
//
//echo "Hello, world!";
//
//$content = ob_get_clean();
//if (is_int($user)) {
//    $replace = 'User';
//} else {
//    $replace = 'Everyone';
//}
//
//$content = str_replace('world', $replace, $content);
//
//echo $content;

$myArray = [1, 2, 3];

ob_start();

print_r($myArray);

$content = ob_get_clean();

var_dump($content[1]);

