<?php

require 'app/bootstrap.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="delete.php" method="post">
        <input type="submit" value="Delete my account">
        <input type="hidden" name="_token" value="<?php echo $_SESSION['token']; ?>">
    </form>
</body>
</html>