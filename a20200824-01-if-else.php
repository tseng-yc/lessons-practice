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
if(!empty($_GET['age'])and $_GET['age']>=18){
?>
<img src="./image/190703-4093-05-tz5Wi.jpg" alt="">

<?php } else { ?>

<img src="./image/collage-1559293478.jpg" alt="" >
<?php } ?>

<br>

<?php if(!empty($_GET['age'])and $_GET['age']>=18): ?>

<img src="./image/190703-4093-05-tz5Wi.jpg" alt="">
<?php else: ?>
<img src="./image/collage-1559293478.jpg" alt="">
     <?php endif; ?>
</body>
</html>