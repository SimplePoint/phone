<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
     	$this->display();
    }
    public function upload(){
	$product = D("product");
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     './Public/Upload/'; // 设置附件上传根目录
	    $upload->savePath  =     ''; // 设置附件上传（子）目录
	    $upload->autoSub  =false;
	  	$upload->saveName = array('uniqid','');
	    // 上传文件 
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
	    	$data['product_name']=$_POST['product_name'];
	    	$data['product_image']=$info['product_image']['savename'];
	    	$data['product_price']=$_POST['product_price'];
	    	$data['product_info']=$_POST['product_info'];
	    	$data['data_added']=date("Y-m-d");
	    	$data['category_id']=$_POST['category_id'];
	    	
	    	$product->create($data);
	    	$product->add();


	        $this->success('上传成功！');
	    }
	}
}

