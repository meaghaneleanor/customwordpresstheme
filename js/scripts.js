$(function(){
	$('.aboutImages').flickity({
	  // options
	  cellAlign: 'center',
	  wrapAround: true,
	  freeScroll: true,
	  imagesLoaded: true,
	  setGallerySize: true,
	  resize: true,
	  pageDots: false,
	});

	console.log("It's working");

});


$( ".logo" ).click(function() {
  $( ".mobileNav" ).slideDown( "slow", function() {
  	$('.logo').toggleClass();
  	$('.logo2').toggleClass();
  });
});

$('.logo2').click(function(){
	$('.mobileNav').slideUp('slow', function(){
		$('.logo').toggleClass();
	});
});

