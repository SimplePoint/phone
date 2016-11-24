<?php 
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	//手机注册错误提示
    public function registerPhone(){
    	$this->assign('error','');
       $this->display();
    }


    //邮箱注册错误提示
    public function registerEmail(){
    	$this->assign('error','');
       $this->display();
    }


    //手机注册验证
    public function registerPhoneCheck(){

    	if(isset($_POST['password'])&&isset($_POST['password1'])&&isset($_POST['phone'])){
    		$password = md5(I("post.password"));
			$password1 = md5(I("post.password1"));
			$phone = I("post.phone");
			$username = I("post.phone");
			if($password1==$password){
				$User=D("User");
				$flag=$User->registerPhoneCheck($username,$password,$phone);
				if($flag){
					session('username',$username);
					// setcookie('user',$username,time()+3600,'/');
					// $_COOKIE['user'] = $username;
					$this->display("Index/index");
				}else{
					$this->assign('error',"用户名已存在");
					$this->display("registerPhone");
				}
				
			}
    	}else{
			$this->display("registerPhone");
		}


    }

     //邮箱注册验证
    public function registerEmailCheck(){

    	if(isset($_POST['password'])&&isset($_POST['password1'])&&isset($_POST['email'])){
			$password = md5(I("post.password"));
			$password1 = md5(I("post.password1"));
			$email = I("post.email");
			$username = I("post.email");
			if($password1==$password){
				$User=D("User");
				$flag=$User->registerEmailCheck($username,$password,$email);

				if($flag){
					session('username',$username);
					// setcookie('user',$username,time()+3600,'/');
					// $_COOKIE['user'] = $username;
					$this->display("Index/index");
				}else{
					$this->assign('error',"用户名已存在");
					$this->display("registerEmail");
				}
			}
    	}else{
			$this->display("registerEmail");
		}

    	
    }
//登录验证
    public function loginCheck(){
    	if(IS_POST){

    		$username=$_POST["username"];
    		$password=md5($_POST["password"]);
    		$verify=$_POST["verify"];
    		$User = D("User");
			$flag = $User->LoginCheck($username,$password);   
			if($flag){
				if(!$this->check_verify($verify)){
					$this->error("请输入正确的 验证码");

				}else{
					session('username',$username);
					$this->success("登陆成功",U('Index/index'));

				}
					// setcookie('user',$username,time()+3600,'/');
					// $_COOKIE['user'] = $username;
					// $this->redirect("Index/index");
			}else{
				$this->assign('error',"账号或密码错误");
				$this->display("login");
			}
    	}else{
			$this->display("registerPhone");
		}
    }

	//登录验证吗
	    public function verifyCode(){
	        $Verify = new \Think\Verify();
			$Verify->fontSize =40; 
			$Verify->length = 3;
			$Verify->useNoise = false;
			$Verify->entry();

	    }
	//注销去除cookie
    	public function loginOff(){
		// setcookie('user','',time()-3600,'/');
		// $_COOKIE['user'] = '';
		session("[destroy]");
		$this->redirect("Index/index");
	}

	// 检测输入的验证码是否正确，$code为用户输入的验证码字符串
	function check_verify($code, $id = ''){
	    $verify = new \Think\Verify();
	    return $verify->check($code, $id);
	}
}