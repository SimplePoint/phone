<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>华为手机商城</title>

	<link rel="shortcut icon" href="/huawei/Public/Home/image//favicon.ico">
	<link rel="stylesheet" href="/huawei/Public/Home/css//bootstrap.min.css">
	<link rel="stylesheet" href="/huawei/Public/Home/css//style1.css">
	<link rel="stylesheet" href="/huawei/Public/Home/css//slider.css">
	<link rel="stylesheet" href="/huawei/Public/Home/css//honor.css">
	<link rel="stylesheet" href="/huawei/Public/Home/css//info.css">
	<link rel="stylesheet" href="/huawei/Public/Home/css//style.css">
	
	
	<script src="/huawei/Public/Home/libs//jquery-1.11.3.js"></script>
	<script src="/huawei/Public/Home/libs//bootstrap.min.js"></script>
	<script src="/huawei/Public/Home/js//slider.js"></script>
	<script src="/huawei/Public/Home/js//index.js"></script>
</head>
<body>

<nav name="top">
	<ul class="top-left" >
		<li><a href="<?php echo U('Index/index');?>">华为商城</a></li>
		<li><i>|</i></li>
		<li><a href="<?php echo U('Honor/honor');?>">荣耀系列</a></li>
		<li><i>|</i></li>
		<li><a href="">P系列</a></li>
		<li><i>|</i></li>
		<li><a href="">mate系列</a></li>
	</ul>
	<ul class="top-right">
		<?php  if (isset($_SESSION['username'])) { ?>	
				<li ><a ><?php echo (session('username')); ?>,欢迎你</a></li>
				<li style="width:40px"><a href="<?php echo U('User/loginOff');?>">注销</a></li>
			<?php
 }else{ ?>
				<li style="width:40px"><a href="<?php echo U('User/login');?>">登陆</a></li>
				<li style="width:40px"><a href="<?php echo U('User/regphone');?>">注册</a></li>
			<?php
 } ?>
		<li><i>|</i></li>
		<li style="width:80px;"><a href="">我的订单</a></li>
		<li><i>|</i></li>
		<li style="width:85px;"><a href="">网站导航<i></i></a>
			<div class="top-two">
				<ul>
					<li><a href="">帮助中心</a></li>
					<li><a href="">PC软件</a></li>
					<li><a href="">数字音乐</a></li>
					<li><a href="">爱旅</a></li>
					<li><a href="">华为网盘</a></li>
				</ul>
			</div>
		</li>
	</ul>
<div class="bar">
	<div class="top-bar" >
		<a href="#top"><img src="/huawei/Public/Home/image//top.png" alt=""></a>
	</div>
	<div class="top-info" >
		<a href="#top">返回<br>顶部</a>
		
	</div>
	
</div>
</nav>
<div class="clear"></div>
<!-- 中部导航 -->
<div class="cont banner">
	<div class="logo">
		<h1 style="color:#00B5E2;">VMALL</h1>
	</div>
	
	<div class="clear"></div>
</div>

</div>	




<link rel="stylesheet" href="/huawei/Public/Home/css//cart.css">
<div class="cart-list">

<div id="nav">
	<ul>
		<li style="margin-left:60px;"><input type="checkbox" name="phone" onclick="checkAll(this)" value="0" id="ck">全选</li>
		<li style="margin-left:140px;">商品信息</li>
		<li style="margin-left:320px;">单价</li>
		<li style="margin-left:80px;">数量</li>
		<li style="margin-left:80px;">总金额</li>
		<li style="margin-left:80px;">操作</li>
	</ul>
</div>
<?php if(is_array($cartshow)): $i = 0; $__LIST__ = $cartshow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="cart" class="cart_<?php echo ($i); ?>">
	<div class="cart_hd">
		<p><?php echo ($vo["product_info"]); ?><b class="b1"><?php echo ($vo["product_service1"]); ?></b><b class="b2"><?php echo ($vo["product_service2"]); ?></b></p>

	</div>
	
	<div class="cart_cont">
		<ul>
		
			<li><input type="checkbox" class="checkbox" name="phone" value="" onclick="gouwu(this)"></li>
			<li>
			<img src="/huawei/Public/Upload/<?php echo ($vo["product_image"]); ?>" alt="">
			<i><?php echo ($vo["product_name"]); ?></i>

			</li>
			<li>
				<i><?php echo ($vo["product_system"]); ?>/<?php echo ($vo["product_capacity"]); ?></i>
			</li>
			<li>
				<i class="price">￥<?php echo ($vo["product_price"]); ?></i>
			</li>
			<li>
				<i class="num">X<?php echo ($vo["product_num"]); ?></i>
			</li>
			<li id="all">
				<i class="priceall">总价</i>
			</li>
			<li>
				<input type="button" class="button_<?php echo ($i); ?>" value="删除" id="button">
				<i style="display:none"><?php echo ($vo["cart_id"]); ?></i>
			</li>
		
		</ul>
	</div>

	<div class="cart_info"></div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div>
	<h1 style="margin-left:170px;">总价格：<span id="myspan">0元</span></h1>
</div>

<div class="cart-empty-msg">亲，您购物车里还没有物品哦，快去逛逛吧！</div>

<div style="clear:both"></div>


<script src="/huawei/Public/Home/js//cart.js"></script>
<div style="width:90%;margin:0 auto;">
		<footer >
		<div class="cont footer">
		<dl class="foot1">
			<dt>
				<i></i>
				帮助中心
			</dt>
			<dd>
				<ol>
					<li><a href="">购物指南</a></li>
					<li><a href="">配送方式</a></li>
					<li><a href="">支付方式</a></li>
					<li><a href="">常见问题</a></li>
				</ol>
			</dd>
		</dl>

		<dl  class="foot2">
			<dt>
				<i></i>
				售后服务
			</dt>
			<dd>
				<ol>
					<li><a href="">保修政策</a></li>
					<li><a href="">退换货政策</a></li>
					<li><a href="">退换货流程</a></li>
					<li><a href="">保修状态查询</a></li>
				</ol>
			</dd>
		</dl>

		<dl class="foot3">
			<dt>
				<i></i>
				技术支持
			</dt>
			<dd>
				<ol>
					<li><a href="">售后网点</a></li>
					<li><a href="">预约维修</a></li>
					<li><a href="">手机寄修服务</a></li>
					<li><a href="">维修配件价格查询</a></li>
					<li><a href="">软件下载</a></li>
				</ol>
			</dd>
		</dl>

		<dl class="foot4">
			<dt>
				<i></i>
				帮助中心
			</dt>
			<dd>
				<ol>
					<li><a href="">购物指南</a></li>
					<li><a href="">配送方式</a></li>
					<li><a href="">支付方式</a></li>
				</ol>
			</dd>
		</dl>

		<dl class="foot5">
			<dt>
				<i></i>
				关于我们
			</dt>
			<dd>
				<ol>
					<li><a href="">新浪微博</a></li>
					<li><a href="">腾讯微博</a></li>
					<li><a href="">花粉俱乐部</a></li>
					<li><a href="">商城手机版</a></li>
				</ol>
			</dd>
		</dl>

		<div class="clear"></div>

		</div>

		<!-- <div style="width:100%;margin:0 auto;border:1px solid #ccc;"></div> -->
		<hr>

		<p style="text-align: center;margin-top:30px;">
			<a textvalue="隐私政策" title="隐私政策" target="_blank" href="#">隐私政策</a>
			<a title="服务协议" target="_blank" href="#">服务协议</a>
			        Copyright  2012-2016  VMALL.COM   版权所有  保留一切权利
		</p>
		<p style="text-align: center;">
			<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32011402010009"><img style="width:20px;height:20px;float:none;" src="http://res.vmallres.com/pimages//template/content/2016/20160226162651249.png" title="公安备案" width="20" vspace="0" border="0" hspace="0" height="20"><span style="font-size:15px;font-family:宋体"><span style="font-size:12px;font-family:arial,helvetica,sans-serif;"> 苏公网安备</span><span style="font-size:12px;font-family:arial,helvetica,sans-serif;"> 32011402010009号</span></span></a>
			 | 
			 <a target="_blank" href="http://www.miitbeian.gov.cn">苏ICP备09062682号-9</a>
			  | 增值电信业务经营许可证：苏B2-20130048 | 
			  <a href="http://res.vmallres.com/pimages//sale/2016-10/20161009102851799.jpg" target="_blank" textvalue="网络文化经营许可证：苏网文[2012]0401-019号">网络文化经营许可证：苏网文[2015] 1599-026号</a>
		</p>


	</footer>
</div>	
</body>
<ml>


</body>
</html>
</div>