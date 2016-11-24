<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
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




<div class="common"> 	
 <div class="slider"> 
  <ul class="slider-main"> 
   <li class="slider-panel"> 
    <a href="" target="_blank"><img alt="" title="" src="/huawei/Public/Home/image//1.jpg"></a> 
   </li> 
   <li class="slider-panel"> 
    <a href="" target="_blank"><img alt="" title="" src="/huawei/Public/Home/image//2.jpg"></a> 
   </li> 
   <li class="slider-panel"> 
    <a href="" target="_blank"><img alt="" title="" src="/huawei/Public/Home/image//3.jpg"></a> 
   </li> 
   <li class="slider-panel"> 
    <a href="" target="_blank"><img alt="" title="" src="/huawei/Public/Home/image//4.jpg"></a> 
   </li> 
  </ul> 
  <div class="slider-extra"> 
   <ul class="slider-nav"> 
    <li class="slider-item">1</li> 
    <li class="slider-item">2</li> 
    <li class="slider-item">3</li> 
    <li class="slider-item">4</li> 
   </ul> 
  <!--  <div class="slider-page"> 
    <a class="slider-pre" href="javascript:;;"><</a> 
    <a class="slider-next" href="javascript:;;">></a> 
   </div>  -->
  </div>
 </div> 
 </div>
 <div class="cont hot">
 	<div class="item">
		<ul>
			<li class="item1"><a href="">实名认证</a></li>
			<li class="item2"><a href="">以旧换新</a></li>
			<li class="item3"><a href="">优购码</a></li>
			<li class="item4"><a href="">开售提醒</a></li>
			<li class="item5"><a href="">公告</a></li>
			<li class="item6"><a href="">特权频道</a></li>
		</ul>
	</div>
 	<div class="item-r">
 		<ul>
	 		<li><a href=""><img src="/huawei/Public/Home/image//hot1.jpg" alt=""></a></li>
	 		<li><a href=""><img src="/huawei/Public/Home/image//hot2.jpg" alt=""></a></li>
	 		<li><a href=""><img src="/huawei/Public/Home/image//hot3.jpg" alt=""></a></li>
 		</ul>
 	</div>
 	<div class="clear"></div>
</div>
<div class="cont hot-pro">
	<h3>热销推荐</h3>
		<div class="list">

		<ul>
		<?php if(is_array($Products)): $i = 0; $__LIST__ = $Products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list1">
				<div class="list-p" >
				<i style="display:none;"><?php echo ($vo["product_id"]); ?></i>
				<a href="<?php echo U('Product/productDetails');?>?id=<?php echo ($vo["product_id"]); ?>"><img src="/huawei/Public/Upload/<?php echo ($vo["product_image"]); ?>" alt="" id="host<?php echo ($i); ?>"></a>
					<a href="">
						<h5><?php echo ($vo["product_name"]); ?></h5>
						<p><?php echo ($vo["product_info"]); ?></p>
						<i>￥<?php echo ($vo["product_price"]); ?></i>
					</a>
				</div>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>

	<div class="clear"></div>
</div>
<div class="cont news1">
	<a href=""><img src="/huawei/Public/Home/image//new1.png" alt=""></a>
</div>
<div class="product-bg">
	<div class="cont prudect">
		<div class="product-top">
			<h3>精品手机</h3>
			<span>—&emsp;<a href="">更多</a>&emsp;—</span>
		</div>
		<!-- <div class="prudect-left"></div> -->
		<div class="prudect-right">
		
			<ul>
			<?php if(is_array($sales)): $i = 0; $__LIST__ = $sales;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sa): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/productDetails');?>?id=<?php echo ($sa["product_id"]); ?>"><img src="/huawei/Public/Upload/<?php echo ($sa["product_image"]); ?>" alt=""></a>
					<div class="jieshao">
						<h5><?php echo ($sa["product_name"]); ?></h5>
						<p><?php echo ($sa["product_info"]); ?></p>
						<i>￥<?php echo ($sa["product_price"]); ?></i>
					</div>

				</li><?php endforeach; endif; else: echo "" ;endif; ?>	
			</ul>

		
		</div>
	</div>
	<div class="cont news1 news2">
		<a href=""><img src="/huawei/Public/Home/image//new2.jpg" alt=""></a>
	</div>
</div>
<div class="slogan-cont">
	<div class="cont slogan">
		<ul>
			<li class="sl1">
				<i></i>
				500强企业 品质保证
			</li>
			<li class="sl2">
				<i></i>
				7天退货 15天换货
			</li>
			<li class="sl3">
				<i></i>
				99元起免运费
			</li>
			<li class="sl4">
				<i></i>
				448家维修站点 全国联保
			</li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
<script>
	// for(var i=1;i<6;i++){
	// 	(function(){
	// 		var index = i;
	// 		$("#host"+index).click(function(){
	// 		var id = $(this).prev().text();
	// 		alert(id);
	// 		$.post('http://localhost/huawei/Home/Product/productDetails')
	// 		});
	// 	})()
		

	// }

</script>
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