//
//



//Show Lightbox

$('.figure-box').click(function() {
	console.log('Image Clicked');
	$('.lb-bg').addClass('show-lb');
});
 


//Hide Lightbox

$('header, .blow-up, .x-out').click(function() {
	console.log('Close out clicked');
	$('.lb-bg').removeClass('show-lb');
	$('.art-title').removeClass('show-title');
	$('.blow-up').removeClass('show-blow-up');
	$('.desc').removeClass('show-desc');
})

