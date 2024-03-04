<?php

//$array[] = 'elem4';
//
//$user = [
//    'name' => [
//        'firstname' => 'Jim', 'lastname' => 'Sterling'
//    ],
//    'age' => 25,
//    'location' => [
//        'city' => 'London', 'country' => 'UK'
//    ]
//];
//
//echo $user['location']. PHP_EOL;
//$user[] = 'test';
//$keyLast = array_key_last($user);
//var_dump($user[$keyLast]);


//$array = ['elem1', 'elem2', ''];
//$array2 = ['elem1', 'elem2',  false];
////$array2 = ['elem4', 'elem5', 'elem6'];
////$array2 = [5 => 'elem4', 6 => 'elem5',  7 => 'elem6'];
//
////$array2 = [1, 3, ...$array];
//var_dump($array == $array2);

//$i = 1;
////$array = [];
//while (false) {
//    echo $i . PHP_EOL;
//    $i++;
//}
//
//
//$i = 1;
//do {
//    echo $i . PHP_EOL;
//    $i++;
//} while (false);

//foreach ($array2 as $key => $value) {
//    if ($value === 'elem3') {
//        continue;
//    }
//    $array2[$key] = $value . '!';
//
//    if ($value !== 'elem3') {
//        $array2[$key] = $value . '!';
//    }
//}

//$array2 = ['elem1', 'elem2',  'elem3', 'elem4', 'elem5'];
//foreach ($array2 as $key => $value) {
//    if ($value === 'elem3') {
//        $array2[99] = $value;
//        unset($array2[$key]);
//    }
//}
//var_dump($array2);

//$i = 1;
//while ($i <= 10) {
//    echo $i . PHP_EOL;
//    $i++;
//}

//for ($i = 1, $j = 5; $j && 200; $i++, $j += 5) {
//    echo $i . PHP_EOL;
//}


//function randArray(int $length = 50, int $min = 0, int $max = 10): array
//{
//    $array = [];
//    for ($i = 0; $i < $length; $i++) {
//        $array[] = rand($min, $max);
//    }
//
//    return $array;
//}
//
//$array = randArray(10, 0, 5);
//
//var_dump($array);
//
//$vacancies = [
//    ['title' => 'PHP Developer', 'salary' => '2000$', 'sector_id' => 1, 'location_id' => 3],
//    ['title' => 'Manager', 'salary' => '3000$', 'sector_id' => 2, 'location_id' => 2],
//];
//
//$sectors = [
//    ['id' => 1, 'title' => 'IT'],
//    ['id' => 2, 'title' => 'Finance']
//];
//
//$locations = [
//    ['id' => 1, 'city' => 'Odesa', 'country' => 'UA'],
//    ['id' => 2, 'city' => 'Lviv', 'country' => 'UA'],
//    ['id' => 3, 'city' => 'London', 'country' => 'UK']
//];
//
//foreach ($vacancies as $key => $vacancy) {
//    $vacancies[$key]['sector'] = null;
//    $vacancies[$key]['location'] = null;
//    //find sector for each vacancy
//    foreach ($sectors as $sector) {
//        if (isset($vacancy['sector_id'])
//            && $vacancy['sector_id'] === $sector['id']) {
//            $vacancies[$key]['sector'] = $sector['title'];
//            unset($vacancies[$key]['sector_id']);
//            break;
//        }
//    }
//
//    //find location for each vacancy
//    foreach ($locations as $location) {
//        if (isset($vacancy['location_id'])
//            && $vacancy['location_id'] === $location['id']) {
//            $vacancies[$key]['location'] = $location['city'] . ', ' . $location['country'];
//            unset($vacancies[$key]['location_id']);
//            break;
//        }
//    }
//}
//
//var_dump($vacancies);

$function = function() {
    echo 'function' . PHP_EOL;
};
$array = ['a', $function, 'f', 'b'];

$length = count($array);
for ($i = 0; $i < $length; $i++) {
    if ($array[$i] instanceof Closure) {
        $array[$i]();
    } else {
        echo $array[$i] . PHP_EOL;
    }
}
//
//sort($array, SORT_REGULAR);
//
//var_dump($array);