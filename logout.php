<?php

session_start();

unset($_SESSION['admins']);

# session_destroy(); // 清掉所有 session 資料

header('Location: data-list-pages.php');

// redirect // 轉向