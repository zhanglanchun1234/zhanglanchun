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
                <!-- TAB NAVIGATION -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="" role="tab" data-toggle="tab">list</a>
                    </li>
                    <li><a href="" role="tab" data-toggle="tab">add/update</a></li>
                </ul>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>profile</th>
                        <th>sex</th>
                        <th>birthday</th>
                        <th>grade</th>
                        <th>introduction</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                   
                    </tbody>
                </table>
             
            </div>

        </div>

    </div>

	<?php include './view/footer.php' ?>

    </body>
</html>