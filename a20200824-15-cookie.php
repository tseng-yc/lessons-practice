<?php

setcookie('mycookie', 2);  //這個設定一定要在最前面，不能有留白，不然 空白的部分會被誤認為html的一部分

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

echo $_COOKIE['mycookie']; //打開第一次會讀步道<重新整理之後才會顯示存取的cookie

?>
</body>
</html>

