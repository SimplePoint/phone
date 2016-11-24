<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class CartController extends Controller{
	public function Cart(){
		if(isset($_SESSION["username"])){
			$username = $_SESSION["username"];
		}
		$db = M('Cart');
		$cartshow = $db->join('huawei_product ON huawei_product.product_id = huawei_cart.product_id')->select();
			 
		$this->assign("cartshow",$cartshow);
		$this->display();

		
	}


	public function chuanshuju(){
				if(isset($_SESSION['username'])){
			$data["date"]=date('Y-m-d');
			$data["user_id"]=$_SESSION['username'];
			$data["product_system"]=I('post.product_system');
			$data["product_capacity"]=I('post.product_capacity');
			$data["product_service1"]=I('post.product_service1');
			$data["product_service2"]=I('post.product_service2');
			$data["product_num"]=I('post.product_num');
			$data["product_id"]=I('post.product_id');

			if($data["product_system"]==""){
				echo "1";//手机没有选择制式
			}else if($data["product_capacity"]==""){
				echo "3";//手机没有选择容量
			}else{

				//映射cart表  添加数据
				$db = M("Cart");
				$carts=$db->data($data)->add();
				// $this->assign("carts",$carts);
				echo "4";
				
			}			
		}else{
			echo "2";
		}
	}

	public function shanchu(){
		$id = I('post.cart_id');
		$db = M('Cart');

		$db->where("cart_id=$id")->delete();
	}

}