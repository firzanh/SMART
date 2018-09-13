$(window).scroll(function() {
	var wScroll = $(this).scrollTop();

	if(wScroll > $('.card-diagram').offset().top - 170){
		$('.card-diagram').addClass('muncul');
	}
	if(wScroll > $('.card-c-diagram').offset().top - 170){
		$('.card-c-diagram').addClass('muncul');
	}
	if(wScroll > $('.card-tabel-laporan').offset().top - 270){
		$('.card-tabel-laporan').addClass('muncul');
	}
	if(wScroll > $('.card-tabel-proker').offset().top - 370){
		$('.card-tabel-proker').addClass('muncul');
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
