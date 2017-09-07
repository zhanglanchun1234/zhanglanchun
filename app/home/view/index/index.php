<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;font-size: 80px;color:#ccc;">欢迎使用 后盾85 框架</h1>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">用户管理e</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>用户名</th>
                <th>年龄</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $v): ?>
                <tr>
                    <td><?php echo $v['uid']; ?></td>
                    <td><?php echo $v['name']; ?></td>
                    <td><?php echo $v['age']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>