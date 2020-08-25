<?php

// $date = new DateTime('+1 week');
// setcookie('session', 'abc', $date->getTimestamp());

require 'db.php';
require 'functions.php';

if(!isset($_GET['username'])){
    die();
}

$user = $db-> prepare("SELECT * FROM users WHERE username = :username");

$user-> execute([
    'username' => $_GET['username'],
]);

$user = $user -> fetchObject();

//var_dump($user);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo e($user)-> username; ?></h2>
    <h2><?php echo e($user)-> bio; ?></h2>
</body>
</html>