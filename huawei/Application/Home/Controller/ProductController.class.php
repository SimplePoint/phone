<?php
namespace Home\Controller;
use Think\Controller;

class ProductController extends Controller{
	public function productDetails(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
		$db = M('Product');
		$productss = $db->where("product_id=$id")->select();
		// var_dump($productss);
		$this->assign("productss",$productss);

		$this->display();
	}
	
}