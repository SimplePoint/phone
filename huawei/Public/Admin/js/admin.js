

// function hotClick(t){
// 	// alert(t.parentNode.parentNode.firstChild.innerHTML);
// 	console.log(t.parentNode.parentNode.firstChild.nextSibling.innerHTML);
// }


$(document).ready(function(){
//设定热门
	for(var i=1; i<6; i++){
		(function(){
			var index = i;
			$('.host_'+index).click(function(){
				var id =$(this).parent().parent().children('.id').text();

				$.post('http://localhost/huawei/index.php/Admin/Product/host',{product_id: id}, function(data){
					// alert(data);
				});
					refresh();

			});
		})()

	}

//设定热销
		for(var i=1; i<6; i++){
		(function(){
			var index = i;
			$('.hotSale_'+index).click(function(){
				var id =$(this).parent().parent().children('.id').text();

				$.post('http://localhost/huawei/index.php/Admin/Product/hotSale',{product_id: id}, function(data){
					// alert(data);
				});
					refresh();

			});
		})()

	}

//设定平常
		for(var i=1; i<6; i++){
		(function(){
			var index = i;
			$('.usually_'+index).click(function(){
				var id =$(this).parent().parent().children('.id').text();

				$.post('http://localhost/huawei/index.php/Admin/Product/usually',{product_id: id}, function(data){
					// alert(data);
				});
					refresh();

			});
		})()

	}
//刷新当前页面
	function refresh(){
		window.location.reload();
	}


});

