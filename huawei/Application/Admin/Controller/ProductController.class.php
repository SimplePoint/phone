<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function productControl(){

    	$ProductModel = D('Product');

    	$Pagesize = 5;
// print_r($Pagesize);
    	$count = $ProductModel->getProductsCount();
    	
    	$Page = new \Think\Page($count,$Pagesize);

    	$page = $Page->show();
    	$this->assign("page",$page);

    	$data['limit'] =$Page->firstRow.",".$Page->listRows;

    	$Products = $ProductModel->getProducts($data);


		// $ProductModel = M('Product');
		// $Products = D('Product')->limit(0,3)->select();
		// print_r($data['limit']);
		$this->assign("Products",$Products);

     	$this->display();
    }

    public function host(){
	    $db = M('Product');

	    $id = I('post.product_id');
	    $data["host_id"]="1";
	    $db->where("product_id=$id")->data($data)->save();
	   
	    
	}

	public function hotSale(){
		$db = M('Product');

		$id = I('post.product_id');
		$data['host_id'] = "2";
		$db->where("product_id=$id")->data($data)->save();
	}

	public function usually(){
		$db = M('Product');

		$id = I('post.product_id');
		$data['host_id'] = "0";
		$db->where("product_id=$id")->data($data)->save();
	}
}