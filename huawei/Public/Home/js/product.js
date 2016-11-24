// product.js
// 购买数量加减
$(document).ready(function(){
		$(".jia").click(function(){
			var num=$(this).prev().text();
			num++;
			$(".number").html(num);
		});

		$(".jian").click(function(){
			var num=$(this).next().text();
			if(num>"1"){	
				num--;
				$(".number").html(num);
			}		
		});
	});

//手机型号类型选择  选择制式
$('[class^=system_]').click(function() {
	$('[class^=system_]').css('border',"1px solid #ccc");
	$(this).css({
				"border":"1px solid red",
				
	});

	var sys1 = $(this).text();
	$('.sy1').html(sys1);
})


//选择容量
$('[class^=capacity_]').click(function(){
	$('[class^=capacity_]').css('border',"1px solid #ccc");
		$(this).css({
			"border":"1px solid red"
		});

	var sys2 = $(this).text();
	$('.sy2').html("/"+sys2);
});



//选择服务
$('.first_2').click(function(){
	$('this').css({
		"border":"1px solid red"
	});
	var text=$(this).text();

	$('.zhu>li> .a').html(text);
	$('.first').css('border',"1px solid red")

	$('.sy3').html("/"+text);
});

$('.first_1').click(function(){
	$('this').css({
		"border":"1px solid red"
	});
	var text=$(this).text();
	$('.zhu>li> .a').html(text);
	$('.first').css('border',"1px solid red")
	$('.sy3').html("/"+text);
});



$(".xiaochu1").click(function(){
	$(".first").css('border',"1px solid #ccc")
	$('.sy3').html(" ");
});




$('.last_2').click(function(){
	$('this').css({
		"border":"1px solid red"
	});
	var text=$(this).text();
	$('.last> .b').html(text);
	$('.last').css('border',"1px solid red")
	$('.sy4').html("/"+text);
});

$('.last_1').click(function(){
	$('this').css({
		"border":"1px solid red"
	});
	var text=$(this).text();
	$('.last> .b').html(text);
	$('.last').css('border',"1px solid red")
	$('.sy4').html("/"+text);
});

$(".xiaochu2").click(function(){
	$(".last").css('border',"1px solid #ccc")
	$('.sy3').html(" ");
});




//点击购物车 
$(".button1").click(function(){

	var system = $('.sy1').text();
	var capacity = $('.sy2').text().substring(1);
	var service1 = $('.sy3').text().substring(1);
	var service2 = $('.sy4').text().substring(1);
	var num = $('.number').text();
	var id = $('.product_id').text();

	
		$.post("http://localhost/huawei/index.php/Home/Cart/chuanshuju",
			{
				"product_system":system,
				"product_capacity":capacity,
				"product_service1":service1,
				"product_service2":service2,
				"product_num":num,
				"product_id":id,
			},function(data){
				
				if(data=="2"){
					 alert("请先登录");
				}else if(data=="1"){
					alert("手机没有选择制式");
				}else if(data=="3"){
					alert("手机没有选择容量");
				}else if(data=="4"){
					alert("加入购物车成功");
					window.location.href='http://localhost/huawei/index.php/Home/Cart/cart';
				}
			});
});