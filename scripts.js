//
//

// $(document).ready(function() {


//Show Lightbox

$('.fine-art .figure-box, .digital .figure-box').click(function() {
	console.log('image clicked');
	$('.lb-bg').addClass('show-lb');
});



//Hide Lightbox

$('header, .blow-up, .x-out').click(function() {
	console.log('Close out clicked');
	$('.lb-bg').removeClass('show-lb');
	$('.art-title').removeClass('show-title');
	$('.blow-up').removeClass('show-blow-up');
})



//Display Specific Images and Titles

$('.fig-01').click(function() {
	console.log('image 01 clicked');
	$('#pic-01').addClass('show-blow-up');
	$('#title-01').addClass('show-title');
})


$('.fig-02').click(function() {
	console.log('image 02 clicked');
	$('#pic-02').addClass('show-blow-up');
	$('#title-02').addClass('show-title');
})

$('.fig-03').click(function() {
	console.log('image 03 clicked');
	$('#pic-03').addClass('show-blow-up');
	$('#title-03').addClass('show-title');
})

$('.fig-04').click(function() {
	console.log('image 04 clicked');
	$('#pic-04').addClass('show-blow-up');
	$('#title-04').addClass('show-title');
})

$('.fig-05').click(function() {
	console.log('image 05 clicked');
	$('#pic-05').addClass('show-blow-up');
	$('#title-05').addClass('show-title');
})
$('.fig-06').click(function() {
	console.log('image 06 clicked');
	$('#pic-06').addClass('show-blow-up');
	$('#title-06').addClass('show-title');
})

$('.fig-07').click(function() {
	console.log('image 07 clicked');
	$('#pic-07').addClass('show-blow-up');
	$('#title-07').addClass('show-title');
})

$('.fig-08').click(function() {
	console.log('image 08 clicked');
	$('#pic-08').addClass('show-blow-up');
	$('#title-08').addClass('show-title');
})

$('.fig-09').click(function() {
	console.log('image 09 clicked');
	$('#pic-09').addClass('show-blow-up');
	$('#title-09').addClass('show-title');
})

$('.fig-10').click(function() {
	console.log('image 10 clicked');
	$('#pic-10').addClass('show-blow-up');
	$('#title-10').addClass('show-title');
})

$('.fig-11').click(function() {
	console.log('image 11 clicked');
	$('#pic-11').addClass('show-blow-up');
	$('#title-11').addClass('show-title');
})

$('.fig-12').click(function() {
	console.log('image 12 clicked');
	$('#pic-12').addClass('show-blow-up');
	$('#title-12').addClass('show-title');
})

$('.fig-13').click(function() {
	console.log('image 13 clicked');
	$('#pic-13').addClass('show-blow-up');
	$('#title-13').addClass('show-title');
})

$('.fig-14').click(function() {
	console.log('image 14 clicked');
	$('#pic-14').addClass('show-blow-up');
	$('#title-14').addClass('show-title');
})

$('.fig-15').click(function() {
	console.log('image 15 clicked');
	$('#pic-15').addClass('show-blow-up');
	$('#title-15').addClass('show-title');
})

$('.fig-16').click(function() {
	console.log('image 16 clicked');
	$('#pic-16').addClass('show-blow-up');
	$('#title-16').addClass('show-title');
})

$('.fig-17').click(function() {
	console.log('image 17 clicked');
	$('#pic-17').addClass('show-blow-up');
	$('#title-17').addClass('show-title');
})

$('.fig-18').click(function() {
	console.log('image 18 clicked');
	$('#pic-18').addClass('show-blow-up');
	$('#title-18').addClass('show-title');
})

//

//Failed Attempt to use scroll animations

$("header a h2").click(function() {
	console.log('should be animate scrolling');
	var top = $('body').find($(this).attr('href')).offset().top;
	$('html').animate({scrollTop: top},1000, 'easeInOut');
})


 $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });