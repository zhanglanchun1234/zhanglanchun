<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="application/javascript" src="./static/js/jquery-2.1.0.js"></script>
	<?php include './view/header.php' ?>
    <div class="container">
        <div class="row">
			<?php include './view/left.php' ?>
            <div class="col-lg-9">
                <!-- TAB NAVIGATION -->
                <ul class="nav nav-tabs" role="tablist">
                    <li><a href="" role="tab" data-toggle="tab">student list</a></li>
                    <li class="active"><a href="" role="tab" data-toggle="tab">add/update</a>
                    </li>
                </ul>
                <form action="" method="post" role="form" style="margin-top: 20px;" enctype="multipart/form-data">
                    <div class="form-group">
                        <select name="id" class="form-control" required>
                            <option value="">please choose grade</option>
							
                                <option value="" selected></option>
							
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="sname" id="" placeholder="name"
                               value="" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="profileupload" class="form-control" >
                        <input type="hidden" name="profile" value="">
                        <a href="javascript:;" class="btn btn-xs btn-info" style="margin-top: 10px;" id="showAttachment">显示素材</a>
                        <div style="margin-top: 20px;" id="attachmentBox">
                            <img src="" alt="">
                        </div>
                  
                    </div>
                    <div class="form-group">
                        <div class="radio ">
                            <label class="radio-inline">
                                <input type="radio" name="sex" value="男" checked>
                                男
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sex" value="女"  >
                                女
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="date" name="birthday" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <input type="url" name="homepage" class="form-control" placeholder="homepage">
                    </div>
                    <div class="form-group">
                        <textarea name="introduction" placeholder="introduce yourself" cols="30" rows="6" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">save</button>
                </form>
            </div>

        </div>

    </div>
	<?php include './view/footer.php' ?>


    </body>
</html>