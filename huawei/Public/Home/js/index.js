$(document).ready(function() { 

	$(".top-bar").hide();
	$(".top-bar").hover(function(){
		$(".top-info").show();
	})
	var maxScrollTop = 500;
	$(window).scroll( maxScrollTop, function(event){
	    var $me = $(this);
	    if( $me.scrollTop() > event.data ){
	        $(".top-bar").fadeIn(5000);
	         $(".top-info").fadeIn(6000);
	        // $me.scrollTop( 0 );
	    }else{
	    	$(".top-bar").fadeOut(3000);
	    	$(".top-info").fadeOut(1000);
	    }
	} );
})