<?php
//$page_title = '資料列表';
//$page_name = 'data-list';
require __DIR__ . '/parts/__connect_db.php';


$perPage = 5; //每頁有幾筆資料

$output = [
    'perPage' => $perPage,
    'totalRows' => 0,
    'totalPages' => 0,
    'page' => 0,
    'rows' => [],
];

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;



$t_sql = "SELECT COUNT(*) FROM `address_book`";
//$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
//$totalPages = ceil($totalRows/$perPage);
$output['totalRows'] = $totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$output['totalPages'] = $totalPages = ceil($totalRows / $perPage);


/*<?php

$rows = [];
if ($totalRows>0){
    if ($page<1) $page=1;
    if ($page> $totalPages) $page = $totalPages;

    $sql = sprintf("SELECT * FROM `address_book` LIMIT %s, %s",($page-1)*$perPage,$perPage);
    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchAll();
}


?>

<?php require __DIR__. '/parts/__html_head.php'?>
<?php include __DIR__. '/parts/__navbar.php'?>

<div class="container">
    <table class="table table-striped">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item <?= $page==1 ? 'disabled' : '' ?>">
                                <a class="page-link" href="?page=<?= $page-1 ?>">Previous</a>
                            </li>
                            <?php for($i=1; $i<=$totalPages; $i++): ?>
                                <li class="page-item <?= $i==$page ? 'active' : '' ?>">
                                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <li class="page-item <?= $page==$totalPages ? 'disabled' : '' ?>">
                                <a class="page-link" href="?page=<?= $page+1 ?>">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>

        <!-- `sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at` -->
        <thead>
        <tr>
            <th scope="col"><i class="fas fa-trash-alt"></i></th>
            <th scope="col"><i class="fas fa-user-times"></i></th>
            <th scope="col">#</th>
            <th scope="col">姓名</th>
            <th scope="col">電郵</th>
            <th scope="col">手機</th>
            <th scope="col">生日</th>
            <th scope="col">地址</th>
            <th scope="col">建立時間</th>
            <th scope="col"><i class="fas fa-edit"></i></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $r): ?>
            <tr>
                <td><a href="data-delete.php?sid=<?= $r['sid'] ?>" onclick="ifDel(event)" data-sid="<?= $r['sid'] ?>">
                        <i class="fas fa-trash-alt"></a></i></td>

                <td><a href="javascript:delete_it(<?= $r['sid'] ?>)">
                        <i class="fas fa-user-times"></i>
                    </a></td>

                <td><?= $r['sid'] ?></td>
                <td><?= $r['name'] ?></td>
                <td><?= $r['email'] ?></td>
                <td><?= $r['mobile'] ?></td>
                <td><?= $r['birthday'] ?></td>
<!--                <td>--><?//= $r['address'] ?><!--</td>-->
                <td><?= htmlentities($r['address']) ?></td>
                <td><?= $r['created_at'] ?></td>
                <td><a href="#"><i class="fas fa-edit"></i></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php include __DIR__. '/parts/__scripts.php'?>

<script>


    function ifDel(event){
        const a = event.currentTarget;
        console.log(event.target, event.currentTarget);
        const sid = a.getAttribute('data-sid');
        if (!confirm('是否要刪除編號為 ${sid} 的資料?')){
            event.preventDefault(); // 取消連往 href 的設定
        }



    function delete_it(sid){
        if(confirm(`是否要刪除編號為 ${sid} 的資料???`)){
            location.href = 'data-delete.php?sid=' + sid;
        }
    }
</script>
<?php include __DIR__. '/parts/__html_foot.php'?>

 ?>*/


if ($totalRows > 0) {
    if ($page < 1) $page = 1;
    if ($page > $totalPages) $page = $totalPages;
    $output['page'] = $page;

    $sql = sprintf("SELECT * FROM `address_book` ORDER BY sid DESC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
    $stmt = $pdo->query($sql);
    $output['rows'] = $stmt->fetchAll();
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
