$(function(){
	$( '#exp-slider' ).sliderPro({
		width: "100%",
		height: 500,
		arrows: true,
		buttons: false,
		
	});

	$( '.slider' ).sliderPro({
		width: "100%",
		height: 300,
		arrows: true,
		buttons: true,
		
	});

	$( '#destiny-slide' ).sliderPro({
		width: 500,
		height: 400,
		arrows: true,
		buttons: true,
		thumbnailsPosition: 'left',	
		slideDistance: 50,
		visibleSize: '100%',
		autoplay: true,
	});

	$( '#combo-slide' ).sliderPro({
		width: "80%",
		height: 400,
		arrows: true,
		buttons: true,
		thumbnailsPosition: 'left',	
		slideDistance: 50,
		visibleSize: '100%',
		autoplay: true,
	});

    $('#slider div:gt(0)').hide();
    setInterval(function(){
      $('#slider div:first-child').fadeOut(0)
         .next('div').fadeIn(2000).addClass("animated fadeIn delay-1s")
         .end().appendTo('#slider');}, 8000);

    $('#slider-right div:gt(0)').hide();
    setInterval(function(){
      $('#slider-right div:first-child').fadeOut(100)
         .next('div').fadeIn(1000).addClass("animated fadeInRight delay-1.5s")
         .end().appendTo('#slider-right');}, 8000);

$('#services').waypoint(function( direction) {
	if(direction == 'down'){
	  $('#services').addClass('visible');
	  // animacion para about-us
	  $('.services').addClass('animated fadeInDown');
	} else{
	   $('#services').removeClass('visible');
		 $('.services').removeClass('animated fadeInDown');
	}
  }, { offset: '70%' });

  $('#destiny').waypoint(function( direction) {
	if(direction == 'down'){
	  // animacion para about-us
	  $('.slider').addClass('visible animated fadeInDown');
	} else{
		 $('.slider').removeClass('visible animated fadeInDown');
	}
  }, { offset: '70%' });

  $(window).scroll(function() {
	// 100 = The point you would like to fade the nav in.
	  
	if ($(window).scrollTop() > 100 ){
		$('header').addClass('bg-white');	
	  } else {
		$('header').removeClass('bg-white');		
		 };   	
	});
	
$(document).ready(function() {

	$('#cache').css('left', parseInt($('#slideToOpen').css('width')) + parseInt($('#slideToOpen').css('left')) + 'px');

	$(window).mousemove(function(){
	
			if (parseInt($('#slideToOpen span').css('left')) >= parseInt($('#slideToOpen').css('width'))-20 ) {
			$('#slideToOpen').addClass('open'); 
		} else { 
			$('#dot').css('left',parseInt($('#slideToOpen span').css('left'))+35);
		}
			
		});

	$(window).resize(function(){ 

		var wi = parseInt($('#slideToOpen').css('width'));
		var le = parseInt($('#slideToOpen').css('left'));

		$('#cache').css('left', wi + le + 'px');

		});

	$('#close').click(function(){ 

		$('#slideToOpen span').css('left','0');
		$('#slideToOpen').removeClass('open'); 

		});

	});
});