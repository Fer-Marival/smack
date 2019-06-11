
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

$(function(){
    $('#slider div:gt(0)').hide();
    setInterval(function(){
      $('#slider div:first-child').fadeOut(0)
         .next('div').fadeIn(2000).addClass("animated fadeIn delay-1s")
         .end().appendTo('#slider');}, 8000);
});
$(function(){
    $('#slider-right div:gt(0)').hide();
    setInterval(function(){
      $('#slider-right div:first-child').fadeOut(100)
         .next('div').fadeIn(1000).addClass("animated fadeInRight delay-1.5s")
         .end().appendTo('#slider-right');}, 8000);
});