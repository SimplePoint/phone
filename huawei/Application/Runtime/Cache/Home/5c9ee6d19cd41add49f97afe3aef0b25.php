<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" href="/huawei/Public/Home/css/login.css">
	<link rel="stylesheet" href="/huawei/Public/Home/css//bootstrap.min.css">
</head>
<body style="background: #F1F1F1;">

<nav>
	<div id="header">
		<img src="/huawei/Public/Home/image//logo.jpg" alt="">
		<b>HUAWEI</b><b>|</b>
		<b>华为专场</b>
	</div>

</nav>
<div id="content">
	<h2>欢迎登录华为帐号</h2>
	<br><br>
	<div id="biaodan">
		<form action="loginCheck" method="post">
			<div class="col-sm-8">
	    		<input type="text" class="form-control" id="firstname" placeholder="请输入手机(邮箱)" name="username" required>
	    	</div>
		<br><br><br><br>
	    	<div class="col-sm-8">
	     	 	<input type="password" class="form-control" id="password" placeholder="请输密码" name="password" required>
	    	</div>
		<br><br><br><br>
	    	<div class="col-sm-8">
	     	 	<input type="text" class="form-control" id="check" placeholder="请输验证码" name="verify" required>
	     	 	 <img src="<?php echo U('User/verifyCode');?>" alt="" onclick="this.src=this.src+'?' + Math.random();">
	    	</div>

	    	  	<div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<div class="checkbox">
			       			<label>
			          			<input type="checkbox">记住登录账号<p><a href="">忘记密码?</a></p>
			        		</label>
			      		</div>
			   	 	</div>
  				</div>
			
		  	<div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		<button type="submit" class="btn btn-default">登录</button>
		    	</div>
		  	</div>			
		</form>
	</div>
</div>
	
</body>
</html>