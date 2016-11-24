<?php 
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
	 public function registerPhoneCheck($username,$password,$phone){
	 	$row = $this->where("phone = '$phone'")->count();

	 	if($row){
	 		return false;
	 	}else{

	 		$this->password=$password;
	 		$this->username=$phone;
	 		$this->phone=$phone;
	 		$this->add();
	 		return true;

	 	}
	 }


	  public function registerEmailCheck($username,$password,$email){
	 	$row = $this->where("email = '$email'")->count();

	 	if($row){
	 		return false;
	 	}else{

	 		$this->password=$password;
	 		$this->username=$email;
	 		$this->email=$email;
	 		$this->add();
	 		return true;

	 	}
	 }

	public function loginCheck($username,$password,$verify){

		$row=$this->where("username='$username' and password='$password'")->select();

		if($row){
			return true;
		}else{
			return false;
		}

	
	}
}