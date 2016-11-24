<?php if (!defined('THINK_PATH')) exit();?><!-- register.html -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" href="/huawei/Public/Home/css//User_style.css">
	<link rel="stylesheet" href="/huawei/Public/Home/css//bootstrap.min.css">
	<script src="/huawei/Public/Home/libs//jquery-1.11.3.js"></script>

</head>
<body style="background: #F1F1F1;">
	<!-- 头部 -->
	<div id="nav">
		<div id="header">
			<img src="/huawei/Public/Home/image//logo.jpg" alt="">&nbsp;
			<b>HUAWEI</b><b>|</b>
			<b>华为专场</b>
		</div>
	</div>
	<!-- 注册内容 -->
	<div id="content">
		<ul>
			<li class="phone"><a href="<?php echo U('User/registerPhone');?>">手机注册</a></li>
			<li class="email" style="background:red;"><a href="<?php echo U('User/registerEmail');?>">邮箱注册</a></li>
		</ul>
		<b style="float:right">已有华为帐号<a href="">登录</a></b>

		
	
		<div id="email">
			<div class="gukuan">
				<h1>注册华为账号</h1>
				<p>华为帐号是您用于访问所有华为服务的帐号。使用华为帐号登录后，您将可以使用云服务、华为商城、花粉俱乐部、应用市场、EMUI产品、华为网盘和开发者联盟。</p>
			</div>
			<div class="xian"></div>

			<div class="gukuan">
				<h4>华为账号</h4>
				<p>输入邮箱作为您的华为帐号，用于登录、重设密码、验证身份。</p>
				<form action="registerEmailCheck" method="post">
				  	<div class="form-group">
							<label for="firstname" class="col-sm-2 control-label">邮箱地址</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="firstname" placeholder="请输入邮箱" name="email" required><span><?php echo ($error); ?></span>
						</div>
						</div>

					<br /><br />
				<div style="border:1px solid #ccc;width:100%; margin-top:30px;"></div>
					<br /><br />
  					<h4>设置登录密码</h4>
					<p>密码长度8~32位，至少包含1个大写字母、1个小写字母和1个数字，不与其它网站相同</p>

					<div class="form-group">
   						<label for="firstname" class="col-sm-2 control-label">设置密码</label>
				    	<div class="col-sm-4">
				    		<input type="password" class="form-control" id="firstname" placeholder="请输入密码" name="password" required>
				    	</div>
  					</div>
	<br /><br />
				  	<div class="form-group">
				   			<label for="firstname" class="col-sm-2 control-label">确认密码</label>
				    	<div class="col-sm-4">
				    		<input type="password" class="form-control" id="firstname" placeholder="重复密码" name="password1" required>
				    	</div>
				  	</div>
	<br /><br />
					<div style="border:1px solid #ccc;width:100%; margin-top:30px;"></div>
					<h4>华为帐号隐私声明</h4>
					<p>为完成注册，华为将为您创建唯一的华为帐号，来标识您和提供更优服务，还将采集您所有登录设备的信息 (IMEI 和 SN) 和帐号信息 (姓名、昵称、性别、生日、邮件地址、手机号、密码和头像)。需要短信验证码时，将自动读取并输入短信验证码。如果您不同意以上任何条款，请离开注册界面。
						点击“注册”，即表示您已阅读并同意华为隐私政策。
					</p>

	<br /><br />
					<div style="border:1px solid #ccc;width:100%; margin-top:0px;"></div>
					<h4>最终用户许可协议</h4>
					<p>华为帐号用户可以通过手机号或邮件地址搜索到您，并可查看您的头像、姓名和地区信息。您也可以在帐号中心的设置中关闭对应的搜索开关，以不被新朋友查找到。
					请仔细阅读最终用户许可协议。本条款确定了您使用华为云产品、软件、网站及相关服务时的权利和责任。同意本条款，才能创建华为帐号。
					</p>
	<br /><br />
					<div style="border:1px solid #ccc;width:100%; margin-top:0px;"></div>
					<h4>点击注册，即表示我同意华为隐私政策与最终用户许可协议。</h4>	

	<br /><br />
					<div style="border:1px solid #ccc;width:100%; margin-top:0px;"></div>
					
					<div class="form-group">
    					<div class="col-sm-offset-2 col-sm-10">
      						<button type="submit" class="btn btn-default">立即注册</button>
    					</div>
  					</div>								

				</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>