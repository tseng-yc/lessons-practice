<div>
    <?php
    //date_default_timezone_set('Asia/Tokyo'); 如果去php.ini改timezone的話就不用再檔案開頭放時區的函式了，但是阿帕契要重開

    $now = date("Y-m-d H:i:s");
    $after30 = date("Y-m-d", time() + 30*24*60*60); //30天要給秒數

    $date1 = date("Y-m-d H:i:s", strtotime('2020-07-21'));//把字串轉為時間

    $weekday = date("l-W-Y-m-d");//l小寫L是星期幾，W大寫W是第幾周

    echo "now: $now<br>";
    echo "after30: $after30<br>";
    echo "date1: $date1<br>";

    echo "weekday: $weekday<br>"


    ?>
</div>
