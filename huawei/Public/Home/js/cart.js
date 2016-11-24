//计算每个单品的总价
for(var i=1;i<=100;i++){
	(function(){
		var index = i;
		if($('.cart_'+index)){
			$(".cart-empty-msg").css({
				"display":"none"
			});
		}else{
			$(".cart-empty-msg").css({
				"display":"block"
			});
		}
		var service1 = $('.cart_'+index).find('.b1').text().substring(12,19)-0;
		var service2 = $('.cart_'+index).find('.b2').text().substring(13,19)-0;
		var price = $('.cart_'+index).find('.price').text().substring(1,5)-0;
		var num = $('.cart_'+index).find('.num').text().substring(1,3)-0;
		var priceall = price*num+service1+service2;
		$('.cart_'+index).find(".priceall").html("￥"+priceall);
		$('.cart_'+index).find(".checkbox").val(priceall);
		// console.log(priceall);
		// alert(priceall);
	})()
}

var phones = document.getElementsByName("phone");
// console.log(phones);
var totalPrice=0;
//全选

 
function checkAll(o){
	for(var j=0;j<phones.length;j++){
		phones[j].checked=o.checked;
		if(phones[j].checked==true){
			totalPrice+=parseFloat(phones[j].value);
		}else if(phones[j].checked==false){
			totalPrice=0;
		}	

	}
	 $("#myspan").html(totalPrice+"元");
	
}




function gouwu(obj){
	p=0;
	for(var i=0;i<phones.length;i++){
		if(phones[i].checked===true){

			p+=parseFloat(phones[i].value);
	
		}
		 $("#myspan").html(p+"元");

	}

}


//删除数据
$(document).ready(function(){
	for(var i=0;i<phones.length;i++){
		(function(){
			var index=i;
			$('.button_'+index).click(function(){
				var id = $(this).next().text();
				$.post('http://localhost/huawei/index.php/Home/Cart/shanchu',{cart_id:id},function(data){
					
				});
				history.go(0);

			});

		})()
	}

});




