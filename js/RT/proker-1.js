$(window).scroll(function() {
	var wScroll = $(this).scrollTop();

	if(wScroll > $('.card-b-proker').offset().top - 170){
		$('.card-b-proker').addClass('muncul');
	}
	if(wScroll > $('.card-r-proker').offset().top - 270){
		$('.card-r-proker').addClass('muncul');
	}
});

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
   $('html, body').animate({scrollTop:0}, 'slow');
// 		return false;
}
