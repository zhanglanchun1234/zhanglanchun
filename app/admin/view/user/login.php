<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include './view/header.php' ?>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="">homepage</a></li>
            <li class="active">login</li>
        </ol>
        <form method="post" action="">
            <div class="form-group">
                <label for="">用户名</label>
                <input type="text" class="form-control" id="" placeholder="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="">密码</label>
                <input type="password" class="form-control" id="" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <label for="">验证码</label>
                <input type="text" class="form-control" id="" placeholder="code" name="code" required>
            </div>
            <div class="form-group">
                <img src="index.php?s=admin/user/code" onclick="this.src='index.php?s=admin/user/code&'+Math.random()">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="autologin"> remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">login</button>
        </form>
    </div>
    <?php include './view/footer.php' ?>


    </body>
</html>