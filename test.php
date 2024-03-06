<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <?php
    // if(isset($_SESSION["name"])){
    //     echo $_SESSION["name"]. "</br>";
    // }

    // if(isset($_COOKIE['user'])){
    //     echo $_COOKIE['user'];
    // }

    print_r($_COOKIE);
    ?>
</body>
</html>