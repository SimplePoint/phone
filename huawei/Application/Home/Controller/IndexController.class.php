<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$ProductModel = M('Product');
		 $Products = $ProductModel->where("host_id=1")->limit(5)->select();
		 $this->assign('Products',$Products);
		 // print_r($Products);

		 $sales = $ProductModel->where("host_id=2")->limit(10)->select();
		  $this->assign('sales',$sales);
       $this->display();

    }


}