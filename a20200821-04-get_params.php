
<?php
//$a = $_GET['a'] ?? 0; // php7
$a = isset($_GET['a']) ? $_GET['a'] : 0;
//如果a有設定值的話顯示a，a沒有設定值的話就會顯示0
echo $a;


