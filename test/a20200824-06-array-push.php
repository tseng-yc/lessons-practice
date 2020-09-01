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
<div>
    <?php
    $ar3 =[
        'name' =>'Janice',
        'age' => 26,
        'data'  => [4,1,2,3],
    ];

    $ar3['data'][]=12;//什麼都沒寫會幫你用push,也可以用array_push，但比較麻煩
    $ar4 = &$ar3;  //用&拷貝ar3的參照
    $ar3['data'][1] = 200;

    foreach($ar4 as $k  => $v){
        if(is_array($v)){
            printf("%s => %s<br>",$k,implode(',',$v));
        }else {
            printf("%s => %s<br>", $k, $v);
        }
    }
    //php處理陣列用foreach比較多，較少用for
    //implode把陣列的直用,連起來
    ?>
</div>

</body>
</html>

