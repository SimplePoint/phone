<?php if (!defined('THINK_PATH')) exit();?><!-- productControl.html -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>产品管理</title>

</head>
<style>
#page{

	margin: 20px auto;
	text-align: center;
}
#page a{
		width: 10px;
		height: 10px;

		display: inline-block;

		margin: 0 5px;

		padding: 10px 10px;

		background: #FEF687;

		border: 1px solid #FEF687;

	}
</style>
<body>
	<table width="80%" align="center" cellpadding="10" cellspacing="0" border="1">
		<tr>
			<td>产品ID</td>
			<td>产品类型(荣耀:1/P系列:2/Mate系列:3)</td>
			<td>产品名字</td>
			<td>产品价格</td>
			<td>产品信息</td>
			<td>属于类型(热门/热销/平常)</td>
		</tr>
		<?php if(is_array($Products)): $i = 0; $__LIST__ = $Products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="fu">
			<td class="id"><?php echo ($vo["product_id"]); ?></td>
			<td><?php echo ($vo["category_id"]); ?></td>
			<td><?php echo ($vo["product_name"]); ?></td>
			<td><?php echo ($vo["product_price"]); ?></td>
			<td><?php echo ($vo["product_info"]); ?></td>
			<td>
				<?php echo ($vo["host_id"]); ?>&nbsp;&nbsp;<input type="button" value="热门"  class='host_<?php echo ($i); ?>'>&nbsp;<input type="button" value="热销" class='hotSale_<?php echo ($i); ?>'>&nbsp;<input type="button" value="平常" class='usually_<?php echo ($i); ?>'>
				
			</td>
			
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	<div id="page">
		<?php echo ($page); ?>
	</div>
	<script src="/huawei/Public/Admin/libs/jquery-1.11.3.js"></script>
	<script src="/huawei/Public/Admin/js/admin.js"></script>
</body>
</html>