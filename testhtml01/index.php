<?php

function visitedCountFunc()
{
    if ($_COOKIE) {
        return $_COOKIE['visited'];
    } else {
        return '0';
    }
};

$visitedCount = visitedCountFunc();

setcookie('visited', $visitedCount + 1, time() + 1000);

echo $visitedCount + 1;
// header("Location: http://localhost/test/sample.php", true, 301);
// exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        &lt;秘密の部屋&gt;&amp;テステス&copy;
    </h1>
    <h1 id="foo">bar</h1>
    <form action="" method="post">
        <input type="text" name="name" id="name">
        <input type="submit" value="Subscribe!">
    </form>
    <a href="#foo">bar</a>
</body>

</html>
