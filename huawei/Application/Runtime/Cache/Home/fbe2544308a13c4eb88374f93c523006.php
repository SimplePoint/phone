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
		<li style="width:80px;"><a href="<?php echo U('Cart/cart');?>">我的订单</a></li>
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
		<h1 style="color:#00B5E2;">荣耀专区</h1>
	</div>
	<div class="search">
		<form action="" class="form-search">
			<div class="search_mid">
				<input type="text" class="phone_search">
				<button type="button" class="btn btn-danger" style="background:#00B5E2;border:none">搜索
				</button>
			</div>
		</form>
	</div>	
	<div class="cart">
		<i></i>
		<a href="<?php echo U('Cart/cart');?>">
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
		<div class="nav-mid-both" style="background:black">
			<h2>全部商品</h2>
			<div class=" nav-mid-bar" style="background:black;opacity:0.8;">
				<div class="bar-info" >
					<div class="bar-info-1" id="bar-info-1">
						<h4><a href="" style="color:#fff">手机</a></h4> 
						<span><a href="">荣耀</a></span>
						<span><a href="">畅玩</a></span>
						<span><a href="">华为MaTe</a></span>
						<div class="bar-info-2">
							<p><a href="">华为MaTe</a></p>
							<p><a href="">荣耀</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>			
						</div>
					</div>
				</div>
			
				<div class="bar-info">
					<div class="bar-info-1" id="bar-info-1">
						<h4><a href="" style="color:#fff">平板</a></h4> 
						<span><a href="">荣耀</a></span>
						<span><a href="">畅玩</a></span>
						<span><a href="">华为MaTe</a></span>
						<div class="bar-info-2">
							<p><a href="">华为MaTe 5</a></p>
							<p><a href="">荣耀7</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩6</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
						</div>
					</div>
				</div>
			
				<div class="bar-info">
					<div class="bar-info-1" id="bar-info-1">
						<h4><a href="" style="color:#fff">智能家居</a></h4> 
						<span><a href="">荣耀</a></span>
						<span><a href="">畅玩</a></span>
						<span><a href="">华为MaTe</a></span>
						<div class="bar-info-2">
							<p><a href="">华为P9</a></p>
							<p><a href="">荣耀</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
						</div>
					</div>
				</div>
			
				<div class="bar-info">
					<div class="bar-info-1" id="bar-info-1">
						<h4><a href="" style="color:#fff">手表</a></h4> 
						<span><a href="">荣耀</a></span>
						<span><a href="">畅玩</a></span>
						<span><a href="">华为MaTe</a></span>
						<div class="bar-info-2">
							<p><a href="">荣耀V9</a></p>
							<p><a href="">荣耀</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
						</div>
					</div>
				</div>
			
				<div class="bar-info">
					<div class="bar-info-1" id="bar-info-1">
						<h4><a href="" style="color:#fff">手机</a></h4> 
						<span><a href="">畅玩X5</a></span>
						<span><a href="">荣耀</a></span>
						<span><a href="">华为MaTe</a></span>
						<div class="bar-info-2">
							<p><a href="">畅玩B5</a></p>
							<p><a href="">荣耀</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
						</div>
					</div>
				</div>
			
				<div class="bar-info">
					<div class="bar-info-1" id="bar-info-1">
						<h4><a href="" style="color:#fff">配件</a></h4> 
						<span><a href="">荣耀</a></span>
						<span><a href="">畅玩</a></span>
						<span><a href="">华为MaTe</a></span>
						<div class="bar-info-2">
							<p><a href="">华为耳机</a></p>
							<p><a href="">荣耀充电线</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
						</div>
					</div>
				</div>
				<div class="bar-info">
					<div class="bar-info-1" id="bar-info-1">
						<h4><a href="" style="color:#fff">应用市场</a></h4> 
						<span><a href="">荣耀</a></span>
						<span><a href="">畅玩</a></span>
						<span><a href="">华为MaTe</a></span>
						<div class="bar-info-2">
							<p><a href="">华为P5</a></p>
							<p><a href="">荣耀X8</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
							<p><a href="">畅玩</a></p>
							<p><a href="">华为MaTe</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<ul>
			<li><a href="<?php echo U('Index/index');?>">首页</a></li>
			<li><a href="<?php echo U('Honor/honor');?>">荣耀系列</a></li>
			<li><a href="javascript:;">P系列</a></li>
			<li><a href="javascript:;">mate系列</a></li>
			<li><a href="javascript:;">热门促销</a></li>
			<li><a href="javascript:;">最新产品</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>	




<div class="honor-slider">
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

  </div>
  <div class="clear"></div>
 </div> 
</div>
<div class="honor-main">
  <div class="honor-pro">

     <div class="honor-pro-1">
        <img src="/huawei/Public/Home/image/honor1.jpg" alt="">
     </div>
     <div class="honor-pro-1">
        <img src="/huawei/Public/Home/image/honor2.jpg" alt="">
     </div>
     <div class="honor-pro-1">
        <img src="/huawei/Public/Home/image/honor3.jpg" alt="">
     </div>
     <div class="honor-pro-1">
        <img src="/huawei/Public/Home/image/honor4.jpg" alt="">
     </div> 

     <div class="clear"></div>
  </div>
  <div class="honor-pro">

      <div class="honor-pro-list">
      <?php if(is_array($honor)): $i = 0; $__LIST__ = $honor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$honor): $mod = ($i % 2 );++$i;?><div class="pro-list-b">
            <div class="pro-list-1">
              <a href="">
                <div class="pro-list-info">
                  <h3><?php echo ($honor["product_name"]); ?></h3>
                  <span><?php echo ($honor["product_info"]); ?></span> 
                  <h5><?php echo ($honor["product_price"]); ?></h5>
                </div>
                <a href="<?php echo U('Product/productDetails');?>?id=<?php echo ($honor["product_id"]); ?>"><img src="/huawei/Public/Upload/<?php echo ($honor["product_image"]); ?>" alt=""></a>
              </a>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>

      </div>
    <div class="clear"></div>
  </div>
  <div class="honor-new">
    <img src="/huawei/Public/Home/image//20160926162438550.jpg" alt="">
  </div>
  <div class="b">
      <div class="b-tit">
        <h3>手机</h3>
        <span>荣耀精品手机</span>
      </div>
      <div class="clear"></div>
      <?php if(is_array($seven)): $i = 0; $__LIST__ = $seven;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$seven): $mod = ($i % 2 );++$i;?><div class="b-left">
      <div class="b-left-1">  
          <a href="">
            <a href="<?php echo U('Product/productDetails');?>?id=<?php echo ($seven["product_id"]); ?>"><img src="/huawei/Public/Upload/<?php echo ($seven["product_image"]); ?>" alt=""></a>
            
            <div class="b-left-info">
              <div class="b-left-name">
                  <h1><?php echo ($seven["product_name"]); ?></h1>
                  <span><?php echo ($seven["product_info"]); ?></span>
              </div>
              <div class="b-left-price">
                <h4>￥<?php echo ($seven["product_price"]); ?></h4>
                <button>立即抢购</button>
              </div>   
            </div>
          </a>
      </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
   <ul>
<?php if(is_array($six)): $i = 0; $__LIST__ = $six;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$six): $mod = ($i % 2 );++$i;?><li>
       <div class="b-right">
         <div class="b-right-1">
            <a href="">
              <a href="<?php echo U('Product/productDetails');?>?id=<?php echo ($six["product_id"]); ?>"><img src="/huawei/Public/Upload/<?php echo ($six["product_image"]); ?>" alt=""></a>
              <div class="b-right-info">
                <h5><?php echo ($six["product_name"]); ?></h5>
                <span><?php echo ($six["product_info"]); ?></span>
                <h4><?php echo ($six["product_price"]); ?></h4>
              </div>
          </a>
         </div>
       </div>
     </li><?php endforeach; endif; else: echo "" ;endif; ?>    
   </ul>
    <div class="clear"></div>
  </div>
  <div class="honor-new2">
    <a href="javascript:;"><img src="/huawei/Public/Home/image//20160923092437178.jpg" alt=""></a>
  </div>
</div>    
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