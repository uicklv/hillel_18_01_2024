<?php

define('APP_DIR', __DIR__ . '/');
define('LOG_DIR', __DIR__ . '/logs/');
define('LOG_FILE', 'logs.txt');

define('DB_HOST', 'mysql');
define('DB_PORT', '3306');
define('DB_NAME', 'hillel');
define('DB_CHARSET', 'utf8mb4');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

require_once APP_DIR . 'database/Connector.php';
require_once APP_DIR . 'database/SQLQueryBuilder.php';
require_once APP_DIR . 'database/MySqlQueryBuilder.php';
require_once APP_DIR . 'database/Repository.php';
require_once APP_DIR . 'database/UserRepository.php';

$builder = new MySqlQueryBuilder();

$userRepository = new UserRepository(Connector::getInstance(), $builder);

echo "<pre>";
print_r($userRepository->find(8));
echo "<pre>";

//$builder = new MySqlQueryBuilder();
//$builder->select('users')
//    ->where('id', 5, '>')
//    ->limit(3);
//
//$connector = Connector::getInstance();
//
//$stmt = $connector->prepare($builder->getSQL());
//$stmt->execute($builder->getValues());
//
//echo "<pre>";
//print_r($stmt->fetchAll());
//echo "</pre>";


//try {
//    $dsn = 'mysql:host=mysql;port=3306;dbname=hillel;charset=utf8mb4';
//    $connect = new PDO($dsn, 'root', 'root');

//    $connect->exec("INSERT INTO `users`(`name`, `email`, `password`, `gender`)
//                    VALUES ('Test', 'test@gmail.com', 'password', 'male')");

//    $query = "SELECT * FROM `users`";
//    $stmt = $connect->exec($query);
//    $stmt = $connect->query($query);

//    echo "<pre>";
//        print_r($stmt->fetchAll(PDO::FETCH_OBJ));
//    echo "<pre>";

//    while ($result = $stmt->fetch(PDO::FETCH_OBJ)) {
//        echo "<pre>";
//            print_r($result);
//        echo "<pre>";
//    }
//    print_r($stmt->fetch());
//    print_r($stmt->fetch());

//    $email = "kate@gmail.com";
//
//    $query = "SELECT * FROM `users` WHERE `email` = ?";
//    $query = "SELECT * FROM `users` WHERE `email` = :email";
//
//    $stmt = $connect->prepare($query);
//    $stmt->bindParam('email', $email);
//    $stmt->execute();
//    $stmt->fetch();

//} catch (PDOException $exception) {
//    echo $exception->getMessage();
//}
//exit;

//SOLID
//Single responsibility
//Open-closed
//Liskov substitution
//Interface segregation
//Dependency Inversion


// CRUD
// C - Create
// R - Read
// U - Update
// D - Delete




