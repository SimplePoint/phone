<?php if (!defined('THINK_PATH')) exit();?><!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理首页</title>
</head>
<body>
	<form action="<?php echo U('Index/upload');?>" enctype="multipart/form-data" method="post" >
	<input type="text" name="name" />
	<input type="file" name="product_image" required>
	<br><br><br>

	<label for="product_name">产品名字</label>
	<input type="text" name="product_name" required>
	<br><br><br>


	<label for="product_price">产品价格</label>
	<input type="text" name="product_price" required>
	<br><br><br>


	<label for="product_info">产品介绍</label>
	<input type="text" name="product_info" required>
	<br><br><br>


	<label for="category_id">产品类型</label>
	<select name="category_id">                   
		<option value="1" name="category_id">荣耀系列</option>
		<option value="2" name="category_id">P系列</option>
		<option value="3" name="category_id">Mate系列</option>
	</select>
	<br><br><br>


	<input type="submit" value="提交" >
</form>

<a href="<?php echo U('Product/productControl');?>"><button>产品管理</button></a>
</body>
</html>