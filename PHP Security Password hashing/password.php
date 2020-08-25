<?php

//echo md5('abc');
//echo password_hash('abc', PASSWORD_DEFAULT, ['cost' => 12]);
$submittedPassword = 'abc';
$password = '$2y$12$AHZWu/ZpTUti7St45IIfaeVaYZ3We9xMgI0ZmE4pMPWG.JSvOWrda';
$res = password_verify($submittedPassword, $password);
var_dump($res);
?>