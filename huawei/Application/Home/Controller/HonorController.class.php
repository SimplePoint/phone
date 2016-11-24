<?php
namespace Home\Controller;
use Think\Controller;
class HonorController extends Controller {
	public function honor(){
		$db = M('Product');
		$honor = $db->where('category_id=1 and host_id=1')->limit(3)->select();
		$this->assign('honor',$honor);
//荣耀精品手机  荣耀7i  处
		$seven = $db->where('product_name="荣耀7i"')->select();
		$this->assign('seven',$seven);

//荣耀精品手机	荣耀7i 后面6个产品	
		$six = $db->where('category_id=1 and host_id=2')->limit(6)->select();
		$this->assign('six',$six);
		$this->display();
	}
}