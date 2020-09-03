<?php
if (!isset($page_name)) $page_name = ''; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!--            <li class="nav-item active">-->
                <!--                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
                <!--            </li>-->
                <li class="nav-item  <?= $page_name == 'data-list' ? 'active' : ''  ?> ">
                    <a class="nav-link " href="./data-list-pages.php">列表 </a>
                </li>
                <!--            <li class="nav-item">-->
                <!--                <a class="nav-link" href="#">Link</a>-->
                <!--            </li>-->
                <!--            <li class="nav-item dropdown">-->
                <!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                    Dropdown-->
                <!--                </a>-->
                <!--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                <!--                    <a class="dropdown-item" href="#">Action</a>-->
                <!--                    <a class="dropdown-item" href="#">Another action</a>-->
                <!--                    <div class="dropdown-divider"></div>-->
                <!--                    <a class="dropdown-item" href="#">Something else here</a>-->
                <!--                </div>-->
                </li>
                <li class="nav-item  <?= $page_name == 'data-insert' ? 'active' : ''  ?> ">
                    <a class="nav-link " href="./data-insert.php">新增</a>
                </li>
            </ul>

            <ul class="navbar-nav ">
                <?php if (isset($_SESSION['admins'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link"><?= $_SESSION['admins']['nickname'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Log out</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item <?= $page_name == 'login' ? 'active' : '' ?>">
                        <a class="nav-link" href="./login.php">Log in</a>
                    </li>

                <?php endif; ?>
            </ul>
            <!--        <form class="form-inline my-2 my-lg-0">-->
            <!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
            <!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            <!--        </form>-->
        </div>
    </div>
</nav>
<style>
    .navbar .nav-item.active {
        background-color: #7abaff;
        border-radius: 8px;
    }
</style>