const Main = {

	getCurrentYear: () => {
	  let date = new Date();
	  let year = date.getFullYear();

	  document.getElementById('year').innerHTML = year;		
	},
	controlHeaderVisibility: () => {
	  let scroll = $(window).scrollTop();
	  let phpValeLogo = $("#phpValeLogo").offset().top; 

    if (scroll > phpValeLogo) {
    	$('.header').addClass('opacity');
    } else {
      $('.header').removeClass('opacity');
    }
	},
	scroolToSection: (elem) => {
	  let element = $("#" + elem).offset().top;

	  $('html, body').animate({
	    scrollTop: element
	  }, 1000);
	}

}

$(window).scroll(() => {
  Main.controlHeaderVisibility();
});

Main.getCurrentYear();
Main.controlHeaderVisibility();