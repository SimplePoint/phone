<?php if (!defined('THINK_PATH')) exit();?><!-- upload.html -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>上传页面</title>
</head>
<body>
	<form action="<?php echo U('Index/upload');?>" enctype="multipart/form-data" method="post" >
	<input type="text" name="name" />
	<input type="file" name="photo" />
	<input type="submit" value="提交" >
</form>
</body>
</html>