<?php if (!defined('THINK_PATH')) exit();?><!-- productDetails.html -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>华为手机商城</title>
	<link rel="shortcut icon" href="/huawei/Public/Home/image//favicon.ico">
	<link rel="stylesheet" href="/huawei/Public/Home/css//bootstrap.min.css">
	<link rel="stylesheet" href="/huawei/Public/Home/css//style.css">
	<link rel="stylesheet" href="/huawei/Public/Home/css//slider.css">
	<script src="/huawei/Public/Home/libs/jquery-1.11.3.js"></script>
	<script src="/huawei/Public/Home/libs/bootstrap.min.js"></script>
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
	<?php  if(isset($_SESSION["username"])){ ?>
			<li><a><?php echo (session('username')); ?></a></li>
			<li style="width:40px"><a href="<?php echo U('User/loginOff');?>">注销</a></li>
			<?php
 }else{ ?>
				<li style="width:40px"><a href="<?php echo U('User/login');?>">登陆</a></li>
				<li style="width:40px"><a href="<?php echo U('User/registerPhone');?>">注册</a></li>
			<?php
 } ?>
		
		<li><i>|</i></li>
		<li style="width:80px;"><a href="">我的订单</a></li>
		<li><i>|</i></li>
		<li style="width:85px;"><a href="">网站导航</a><i></i></li>
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
		<h1>HuaWei</h1>
	</div>
	<div class="search">
		<form action="" class="form-search">
			<div class="search_mid">
				<input type="text" class="phone_search">
				<button type="button" class="btn btn-danger">搜索</button>
			</div>
		</form>
	</div>	
	<div class="cart">
		<i></i>
		<a href="">
			购物车
		</a>
		<div class="cart-body">
			<i id="cart-bg"></i>
			<p>您的购物车是空的，赶紧选购吧！</p>
		</div>
		<div class="hid"></div>
	</div>
	<div class="clear"></div>
</div>
<div class="nav">
	<div class="cont nav-mid">
		<ul>
			<li><a href="<?php echo U('Index/index');?>">首页</a></li>
			<li><a href="<?php echo U('Honor/honor');?>">荣耀系列</a></li>
			<li><a href="">P系列</a></li>
			<li><a href="">mate系列</a></li>
			<li><a href="">热门促销</a></li>
			<li><a href="">最新产品</a></li>
		</ul>
	</div>
</div>	




<link rel="stylesheet" href="/huawei/Public/Home/css//product.css">
 <div id="content">
 
 	<div class="content_left">
 	<?php if(is_array($productss)): $i = 0; $__LIST__ = $productss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><img src="/huawei/Public/Upload/<?php echo ($vo["product_image"]); ?>" alt=""><?php endforeach; endif; else: echo "" ;endif; ?>
 	<ul>
 		<li></li>
 		<li></li>
 		<li></li>
 		<li></li>
 		<li></li>
 		<li></li>
 		<li></li>	
 	</ul>
 		
 	</div>
 	
 	
 	<div class="content_right">
 	<?php if(is_array($productss)): $i = 0; $__LIST__ = $productss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h4><b><?php echo ($vo["product_name"]); ?></b></h4>
 		<p class="p1"><?php echo ($vo["product_info"]); ?></p>

 		<div style="width:100%;border:1px solid #ccc;"></div>
	 	
	 		<p class="p2">华为价:<b class="b2">￥:<?php echo ($vo["product_price"]); ?></b></p>
	 		<p class="p2">运费:<b class="b1">满 99 免运费</b></p>
	 		<p class="p2">服务:由华为商城负责发货，并提供售后服务</p>
	 		<p class="p2">支持:以旧换新<b class="b1">闲置手机回收最高抵扣5500元</b></p><?php endforeach; endif; else: echo "" ;endif; ?>
 		<div style="width:100%;border:1px solid #ccc;"></div>

 		<div class="system">
 			<p>选择制式:</p>
				<ul>
					<li class="system_1">全网通版</li>
					<li class="system_2">联通定制版</li>
					<li class="system_3">移动定制版</li>
				</ul>
 		</div>
<div style="clear:both"></div>
 		<div class="capacity">
 			<p>选择容量:</p>
 			<ul>
				<li class="capacity_1">4G+64G</li>
				<li class="capacity_2">3G+32G</li>	
			</ul>
 		</div>
<div style="clear:both"></div>
		<div class="service">

			<p>购买服务:</p>
				<ul class="zhu">
					<li class="first"><a href="javascript://" class="a">终端延保服务(一年期)￥188.00</a>
					<i class="xiaochu1"></i>
						<ul class="service_erji">
							<li class="first_1">终端延保服务(一年期)￥188.00</li>
							<li class="first_2">终端延保服务(半年期)￥98.00</li>
						</ul>
					</li>
					<li class="last"><a href="javascript://" class="b">【半价】碎屏意外保障服务D(一年期)￥69.00</a>
						<i class="xiaochu2"></i>
						<ul class="last_erji">
							<li class="last_1">【半价】碎屏意外保障服务D(一年期)￥69.00</li>
							<li class="last_2">意外保障服务D(一年期)￥280.00</li>
						</ul>
					
					</li>
				</ul>
		</div>
<div style="clear:both"></div>
		<div class="num">
			<p>购买数量:</p>
			<ul>
				<li class="jian">-</li>
				<li class="number">1</li>
				<li class="jia">+</li>
			</ul>

		</div>
<div style="clear:both"></div>		
		<div class="select">
			<p>您选择了:<i class="sy1"></i><i class="sy2"></i><i class="sy3"></i><i class="sy4"></i></p>
		</div>
<div style="clear:both"></div>
		<a href="<?php echo U('Cart/cart');?>"><button class="button1"><img src="/huawei/Public/Home/image//cart1.png" alt="">加入购物车</button></a>
		<button class="button2">立即下单</button>		
 	</div>
 </div>


<div style="clear:both"></div>

<script src="/huawei/Public/Home/js//product.js"></script>



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