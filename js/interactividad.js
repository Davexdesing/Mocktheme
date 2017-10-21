$(window).on('scroll', parallax);

function parallax(){

	var s = $(window).scrollTop();
	function parallaxbg(el,t){
		$(el).css({
			'background-attachment': 'fixed',
			'background-position': 'center ' + -(s*t) + 'px'
		})
	}
	function top(el){

		if (s > 620) {
		$(el).css({
			'height': '4rem'

		})
}else{
	$(el).css({
			'height': '6rem'

		})
}
	}
	top('.navbg');
	parallaxbg('.bg-page',1.6);
}

$(document).ready(function($){

		$(document).on('click','load-ajs', function(){
		
		var that = $(this);
		var page = $(this).data('page');
		var newPage = page+1;
		var ajaxurl = that.data('url');
		
		$.ajax({
			
			url : ajaxurl,
			type : 'post',
			data : {
				
				page : page,
				action: 'load_more'
				
			},
			error : function( response ){
				console.log(response);
			},
			success : function( response ){
				
				that.data('page', newPage);
				$('.load').append( response );
				
			}
			
		});
		
	});
	
});


