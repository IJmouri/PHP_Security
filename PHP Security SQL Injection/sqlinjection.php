<?php

$db = new PDO('mysql:host=localhost; dbname=website', 'root', '');

if(isset($_POST['email'])){
    $email = $_POST['email'];
//die($email);
$user = $db->prepare("SELECT * FROM users WHERE email = :email");
$user->execute([
    'email' => $email
]);

if($user->rowCount()){
    die('Send Email');
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sqlinjection.php" method="post" autocomplete="off">
        <label for="email">Email
            <input type="text" name="email" id="email">
        </label>
        <input type="submit" value="recover">
    </form>
</body>
</html>