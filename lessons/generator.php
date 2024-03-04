<?php

//function numbers(int $max = 10): array
//{
//    $array = [];
//    $i = 0;
//    while ($i <= $max) {
//        $array[] = $i;
//        $i++;
//    }
//
//    return $array;
//}

//$numbers = numbers();
//foreach ($numbers as $number) {
//    echo $number . PHP_EOL;
//}
//
//
//function generator(int $max = 10)
//{
//    yield from [1,2,3];
//}
//
//$numbers = generator();
//
//foreach ($numbers as $number) {
//    echo $number . PHP_EOL;
//}

function generator(int $start, int $end)
{
    for ($i = $start; $i < $end; $i++) {
        yield $i;
    }
}


//$start = memory_get_usage();
//$numbers = range(1, 60000);
//$end = memory_get_usage();
//
//echo $end - $start . PHP_EOL;

//$start = memory_get_usage();
//$numbers = generator(1, 60000);
//$end = memory_get_usage();
//echo $end - $start . PHP_EOL;


function newGenerator()
{
    yield 1;
    yield 2;
    yield 3;
}

//$numbers = newGenerator();
//var_dump($numbers);
//exit;
//$search = 0;
//foreach (newGenerator() as $key => $value) {
//   if($value == 2) {
//       $search = $value;
//       break;
//   }
//}
//
//function_exists()



//function test()
//{
//    $a = 5;
//    global $a;
//    echo $a;
//}
//$a = 10;
//test();
//echo $a;

//function myGenerator()
//{
//    for ($i = 0; $i <= 10; $i++) {
//        $saveValue = yield;
//        if ($saveValue === 'stop') {
//          break;
//        }
//        yield $i;
//    }
//}
//
//$generator = myGenerator();
//foreach ($generator as $value) {
//    echo $value . PHP_EOL;
//    if ($value === 5) {
//        $generator->send('stop');
//    }
//}

function printer()
{
    echo "I'm printer!" . PHP_EOL;
    while(true){
        $string = yield;
        echo $string . PHP_EOL;
    }
}

$printer = printer();
$printer->send('Hello');
$printer->send('Hello2');
$printer->send('Hello3');
