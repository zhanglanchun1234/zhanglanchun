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
        <div class="row">
			<?php include './view/left.php' ?>
            <div class="col-lg-9">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="">current password</label>
                        <input type="password" class="form-control" id="" placeholder="current password" name="password"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="">new password</label>
                        <input type="password" class="form-control" id="" placeholder="new password" name="password1" required>
                    </div>
                    <div class="form-group">
                        <label for="">confirm Password</label>
                        <input type="password" class="form-control" id="" placeholder="confirm password" name="password2"
                               required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">confirm</button>
                </form>
            </div>
        </div>


    </div>

	<?php include './view/footer.php' ?>

    </body>
</html>