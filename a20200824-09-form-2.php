<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-info" role="alert">
                    <pre><?php
                            print_r($_POST);
                            ?></pre>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form method="post">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1" value="勾選">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



    <!--<form>-->
    <!--    <div class="form-group">-->
    <!--        <label for="exampleInputEmail1" >Email address</label>-->
    <!--        <input type="text" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1">-->
    <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    <!--    </div>-->
    <!--    <div class="form-group">-->
    <!--        <label for="exampleInputPassword1">Password</label>-->
    <!--        <input type="password" class="form-control" id="exampleInputPassword1" name="password">-->
    <!--    </div>-->
    <!--    <div class="form-group form-check">-->
    <!--        <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
    <!--        <label class="form-check-label" for="exampleCheck1" name="exampleCheck1">Check me out</label>-->
    <!--    </div>-->
    <!--    <button type="submit" class="btn btn-primary">Submit</button>-->
    <!--</form>-->

    <script src="../lib/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>

</html>