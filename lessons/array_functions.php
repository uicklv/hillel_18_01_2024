<?php

//$values = ['Jim', 'Nick', 'Kate', 'Mike'];
//
////$names = '';
////foreach ($values as $key => $value) {
////    if (array_key_first($values) === $key) {
////        $names .= $value;
////    } else {
////        $names .= ', ' . $value;
////    }
////}
//
//$names = implode(', ', $values);
//$arrayNames = explode(', ', $names);
//
//$testString = "Test string. Hello world. I'm fine. I live in Ukraine.";
//$testArray = explode(' ', $testString);
//
////foreach ($testArray as $key => $word) {
////    $testArray[$key] = rtrim($word, '.');
////}
//
//$newArray = myArrayMap($testArray, function ($value) {
//    return rtrim($value, '.');
//});
//
//print_r($newArray);
//
//function myArrayMap(array $myArray, ?Closure $closureFunction = null)
//{
//    $newArray = [];
//    if ($myArray) {
//        if (!isset($closureFunction)) {
//            return $myArray;
//        }
//        foreach ($myArray as $value) {
//            $newArray[] = $closureFunction($value);
//        }
//    }
//
//    return $newArray;
//}
//
//array_map();

//$keys = ['sky', 'grass', 'orange'];
//$values = ['blue', 'green', 'orange'];
//
////$newArray = [];
////foreach ($keys as $k => $key) {
////    $newArray[$key] = $values[$k];
////}
//
//$newArray = array_combine($keys, $values);
//
////print_r(array_flip($newArray));
//
//
//$myString = "PHP Developer, Odesa, 2500";
//[$title, $location, $salary] = explode(", ", $myString);
//$title = $myArray[0];
//$location = $myArray[1];
//$salary = $myArray[2];


//$myArray = ['title' => 'PHP Developer', 'location' => 'Odesa', 'salary' => 2500];
//
//extract($myArray);
//echo $title . ' ' . $location . ' ' . $salary .PHP_EOL;

//$title = 'PHP Developer';
//$location = 'Odesa';
//$salary = 2500;
//
//$array = compact('title', 'location', 'salary');
//
//print_r($array);

//$data = [
//    ['title' => 'PHP Developer', 'location' => 'Odesa', 'salary' => 2500],
//    ['title' => 'Js Developer', 'location' => 'Lviv', 'salary' => 1000],
//    ['title' => 'VUE Developer', 'location' => 'London', 'salary' => 3500],
//    ['title' => 'Laravel Developer', 'location' => 'Liverpool', 'salary' => 4500],
//];
//
//$titles = array_column($data, 0);
//foreach ($data as $job) {
//    $titles[] = $job['title'];
//}
//print_r($titles);
//$numbers = [1, 2, [], -5, '', [], '', -5, 0];
//
//$uniques = array_unique($numbers, SORT_REGULAR);
//print_r($uniques);
//$newArray = array_filter($numbers, fn($number) => $number < 0);
//print_r($newArray);

//$names = ['name1' => 'Jim', 'name2' => 'Nick', 'name3' => 'Kate', 'name4' => 'Mike'];
//
//array_walk($names, function (&$value, $key) {
//    $value = "$key is $value";
//});
//
//print_r($names);

//$numbers = ['a' => 'A', 'b' => 'B', 'c' => 'C'];
//$numbers2 = ['c' => 'C2', 'd' => 'D'];
//
//$arrayNumbers = array_merge($numbers2, $numbers);
//
//array_push($arrayNumbers, 5, 10 ,20);
//$arrayNumbers[] = 5;
//
//$arrayNumbers = [5, 10 ,20, 14, 5];
//
//echo min($arrayNumbers) . PHP_EOL;
//echo max($arrayNumbers) . PHP_EOL;

//$numbers = range(0, 10);

//$arrayNumbers = [1, 'test' => 10 ,20, 14, 5];
//echo array_search('5', $arrayNumbers, true) . PHP_EOL;
//print_r(array_slice($arrayNumbers, -2, 2));