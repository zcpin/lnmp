<?php
phpinfo();

$dsn = 'mysql:host=mysql;port=3306';
$user = 'root';
$password = '123456';

try{
    $pdo = new PDO($dsn,$user,$password);
    print_r($pdo);
}catch(PDOException $e){
    echo 'Connection failed:' . $e->getMessage();
}

$redis = new Redis();
$redis->connect('redis',6379);
$redis->set('pin','ghs');
echo $redis->get('pin');