<?

if (isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);
    setcookie('username', $username, time() + 60 * 60);
    header('Location: page2.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>