$(document).ready( function() {
    $('#myCarousel').carousel({
		interval:   4000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.sliddd a', function() {
			clickEvent = true;
			$('.sliddd li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.sliddd').children().length -1;
			var current = $('.sliddd li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.sliddd li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
	
	$(function (){
		
		$("#register").ajaxForm({
			
		beforeSend:function(){
			$("#image").html("<img src='images/loading.gif' width='100px'/>")
			}
			,success:function(data){
			$("#image").html(data);
		}
		});
		
	});
});