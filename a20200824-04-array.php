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
<pre> <!-- 用div會全部擠在一起  -->
    <?php
    $ar1 =array(3,5,78,99);
    $ar =[2,5,89,4];

    $ar3 =[
        'name' => 'Janice',
        'age' => '25',
        'data' => [5,6,8,9],
        200,
    ];
    print_r($ar1);
    print_r($ar3);


    var_dump($ar);
    var_dump($ar3);
    //可以看變數也可以看array，會有詳細的資料類型
    ?>
</pre>


</body>
</html><?php
