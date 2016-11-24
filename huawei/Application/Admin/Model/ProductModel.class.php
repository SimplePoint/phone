<?php 
namespace Admin\Model;
use Think\Model;

class ProductModel extends Model{
	public function getProducts($data){


		if($data['limit']){
			$limit = $data['limit'];
		}else{
			$limit = '0,5';
		}

		$result = $this->limit($limit)->select();
		return $result; 
	}

	public function getProductsCount(){
		return $this->count();
	}

	

}
