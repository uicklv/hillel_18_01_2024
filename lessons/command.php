<?php

//$myVariable = "Hello World! I`m start learning PHP ! \n";
//$myVariable = "Hello World! I`m start learning PHP ! 2\n";

//echo PHP_INT_MAX ;
//echo PHP_INT_MIN;

//$name = 'Jim';
//$variable = 'Hello. I\'m fine ';
//
//var_dump($variable . $name);


//$string = boolval('test123');
//$string = intval('test123');
//$string = floatval('test123');

//$number;

//unset($number);

//var_dump(isset($number));

//echo "Hello, What is your name? \n";
//$name = trim(fgets(STDIN));
//echo "Hi $name. How old are you?";
//$age = fgets(STDIN);
//
//echo $age . PHP_EOL;
//

//$number1 = 'Hello ';
//$number1 .= 'Jim';
//$number1 .= PHP_EOL;

//$number1 = $number1 + $number2;
//$number1 **= $number2;

//$number1 = '';
//$number2 = 2;

//var_dump($number1 xor $number2);
//var_dump(!$number1);
//
//$x = 5;
//
//$c = ++$x + $x++ + $x; //19
//
//echo $c;

//$result = (1 + 5) * 3;
//
//$a = 3;
//$b = 5;
//var_dump(1 <= 1 == 1);



//if (200 === $code) {
//    echo 'OK' . PHP_EOL;
//}
//if (404 === $code) {
//    echo 'Not Found' . PHP_EOL;
//}
//if (301 === $code) {
//    echo 'Redirect' . PHP_EOL;
//}
//if (500 === $code) {
//    echo 'Server error' . PHP_EOL;
//}


//if (200 === $code) {
//    echo 'OK' . PHP_EOL;
//} elseif (404 === $code) {
//    echo 'Not Found' . PHP_EOL;
//} elseif (301 === $code) {
//    echo 'Redirect' . PHP_EOL;
//} elseif (500 === $code) {
//    echo 'Server error' . PHP_EOL;
//} else {
//    echo 'Code not found'. PHP_EOL;
//}

//if (200 == true) { // yes
//    echo 'Hello' . PHP_EOL;
//}
//if ('0' == false) { // yes
//    echo 'Test' . PHP_EOL;
//}
//if (5 === '5') {
//    echo 'World' . PHP_EOL;
//}
//if (true == 1) { //yes
//    echo 'Jack' . PHP_EOL;
//}
//if ('' == null) { //yes
//    echo 'Yellow' . PHP_EOL;
//}
//if ('0.0') {
//    echo 'Blue' . PHP_EOL;
//}

//if (200 === $code) {
//    echo 'OK' . PHP_EOL;
//} elseif (404 === $code) {
//    echo 'Not Found' . PHP_EOL;
//} elseif (301 === $code) {
//    echo 'Redirect' . PHP_EOL;
//} elseif (500 === $code) {
//    echo 'Server error' . PHP_EOL;
//} else {
//    echo 'Code not found'. PHP_EOL;
//}
//$code = 200;
//switch ($code) {
//    case 200:
//    case 404:
//        echo 'Not Found' . PHP_EOL; break;
//    case 301:
//        echo 'Redirect' . PHP_EOL; break;
//    case 500:
//        echo 'Server error' . PHP_EOL; break;
//    default:
//        echo 'Code not found'. PHP_EOL;
//}
//$code = 200;
//$result = match ($code) {
//    200 => trim('OK'),
//    404 => 'Not Found',
//    '404' => 'Not Found String',
//    301 => 'Redirect',
//    500 => 'Server error',
//    default => 'Code not found'
//};

//var_dump($result);

//$status = 'ok';
//if ($status === 'ok') {
//    echo $status . PHP_EOL;
//} else {
//    echo 'not ok' . PHP_EOL;
//}
//
//echo ($status === 'ok' ? $status : 'not ok') . PHP_EOL;
//
//$status = 200;
//if ($status) {
//    echo $status . PHP_EOL;
//} else {
//    echo 'not ok' . PHP_EOL;
//}
//
//echo ($status ? $status : 'not ok') . PHP_EOL;
//echo ($status ?: 'not ok') . PHP_EOL;

//$status = 200;
//if (isset($status)) {
//    echo $status;
//} else {
//    echo "not init";
//}

//echo (isset($status) ? $status : "not init") . PHP_EOL;
//echo ($status ?? "not init") . PHP_EOL;

//$string = 'Hello world. I`m start learning PHP.';
//$string2 = 'Lo Ol olt tol tol test test ';
//$search = 'l';
//$replace = '*';
//$search2 = 'o';
//$replace2 = '$';
//[$string, $string2]= str_replace([$search, $search2], [$replace, $replace2], [$string, $string2]);
//
//echo $string . PHP_EOL;
//echo $string2 . PHP_EOL;

//$a = 5;
//$b = &$a;
//
//++$a;
//++$b;
//echo $a . PHP_EOL;
//echo $b . PHP_EOL;

//$string = 'World Hello World. I`m start learning PHP.';
//$search = 'world';
//if (($position = mb_stripos($string, $search)) !== false) {
//    echo $position . PHP_EOL;
//}


//if (str_contains($string, $search)) {
//    echo 'Exists';
//} else {
//    echo 'Not exists';
//}
//
//echo $position;

//$string = 'World Hello World. I`m start learning PHP.';
//if (($position = strpos($string, '.')) !== false) {
//    $resultString = substr($string, $position + 1, 4);
//    echo $resultString . PHP_EOL;
//}

//$string = "!|Test string|";
//echo $string . PHP_EOL;
//$string = trim($string, "|!");
//
//echo $string . PHP_EOL;
//$string = "Test<p>words.</p><script>alert('test')</script>";
//echo htmlentities($string);

//myFunction();
//MYFUNCTION();
//MYfUNcTIoN();


//function addOne(&$number)
//{
//    ++$number;
//}
//
//$number1 = 5;
//addOne($number1);
//echo $number1 . PHP_EOL;

//function sayHello($name, $number = 5)
//{
//    echo "Hello $name" . PHP_EOL;
//    echo "Number $number" . PHP_EOL;
//}
//
//sayHello('Jim', 25);

//function sum($number1, $number2)
//{
//    return $number1 + $number2;
//}
//
//$resultSum = sum(25, 2);
//echo $resultSum . PHP_EOL;

//function power(&$number, $pow)
//{
//    $number **= $pow;
//}
//
//$number = 5;
//power($number, 2);


//function power(&$number, $pow)
//{
//    //check if pow is positive
//    if ($pow <= 0) {
//        return false;
//    }
//
//    $number **= $pow;
//    return true;
//}
//
//$number = 5;
//$number = power($number, 2);


//echo $number . PHP_EOL;
//$resultSum = sum(25, 2);
//echo $resultSum . PHP_EOL;

//declare(strict_types=1);
//
///**
// * @param int|float $number1
// * @param int|float $number2
// * @param string|null $text
// * @return string|false
// */
//function sum($number1, int|float $number2, ?string $text = null): string|false
//{
//    $result = $number1 + $number2;
//    if ($result < 5) {
//        return false;
//    }
//
//    if (isset($text)) {
//        $result .= $text;
//    }
//
//    return $result . PHP_EOL;
//}
//
//
//
//echo sum('test',7, null);

//function search(?string $keywords = null, ?string $location = null, ?string $sector = null, ?string $salary = null): string
//{
//    $sql = '';
//    if (isset($keywords)) {
//        //todo query to DB
//        $sql .= "...";
//    }
//
//    if (isset($location)) {
//        //todo query to DB
//        $sql .= "$location";
//    }
//
//    if (isset($sector)) {
//        //todo query to DB
//        $sql .= "...";
//    }
//
//    if (isset($salary)) {
//        //todo query to DB
//        $sql .= "$salary";
//    }
//
//    return $sql . PHP_EOL;
//}
//
//echo search(null, null, null, '1900$');
//
//echo search(salary: '1900$', location: 'Odesa');

//function sum(int|float $base, int|float ...$numbers)
//{
//    var_dump($numbers);
//}
//
//
//$function = 'sum';
//
//$function(1, 25);

//$function = function (string $name): string {
//  return  "Hello $name" . PHP_EOL;
//};
//
//$result = $function('Jim');



//function filterString(string $text, ?closure $function = null) : string
//{
//    if (isset($function)) {
//        $text = $function($text);
//    }
//
//    return $text;
//}
//
//$string = "     Test string     ";
//
//$string = filterString($string, function (string $string): string {
//    return  trim($string);
//});
//$string = filterString($string, fn (string $string) => trim($string));
////
////echo $string . PHP_EOL;
//
//$number = 5;

//function sum(int|float $number1, int|float $number2): int|float
//{
//    global $number;
//
//    ++$number;
//
//    return $number1 + $number2;
//}
//
//sum(3, 3);
//
//echo $number . PHP_EOL;
//
//
//$function = function (int|float $number1, int|float $number2) use ($number) {
//    return $number1 + $number2 + $number;
//};

//$fnArrow = fn(int|float $number1, int|float $number2) => $number1 + $number2 + $number;
//
//
//echo $fnArrow(1,2) . PHP_EOL;
//echo $number;

//
//function foo(string $name): callable
//{
//    return function (string $greeting) use ($name): string
//    {
//        return "$greeting $name";
//    };
//}
//
//$function = foo('Bob');
//
//echo $function('Hello');

//function counter()
//{
//    static $counter = 0;
//    $counter++;
//    echo $counter . PHP_EOL;
//}
//
//counter();
//counter();
//counter();
//counter();
//counter();