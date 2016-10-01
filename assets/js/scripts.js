$(document).ready(function() {
	
	window.screenWidth = 0;

	showBackTopLink();

	$(window).on('resize', function(e) {
		var screenWidth = $(this).outerWidth();

		fadeMenu(screenWidth);
	});

	$(window).on('scroll', function() {
		showBackTopLink();
	});

	$(document).on('click', '.ico-menu', function(e) {
		$(this).toggleClass('open');

		$('.menu').toggleClass('open');

		lockUnlockScreen()
		fadeMenu();
	});

	$(document).on('click', '.jumpSectionMenu', function(e) {
		e.preventDefault();

		var rel = $(this).attr('rel');

		var top = $('section.' + rel).offset().top;
		
		if ($('.ico-menu').hasClass('open')) {
			top -= 80;

			$('.ico-menu').trigger('click');
		} else {
			top -= 125;
		}

		$("html, body").animate({ scrollTop: top }, 750);
	});

	$(document).on('click', '.jumpToTop', function(e) {
		e.preventDefault();
		
		$("html, body").animate({ scrollTop: 0 }, 750);
	});

	$(document).on('click', '.openModal', function(e) {
		e.preventDefault();	
		
		var modal = $(this).attr('rel');
		
		$('.modal').removeClass('hide');
		$('.modal-content[data-modal="' + modal + '"]').addClass('active');

		lockUnlockScreen();
	});

	$(document).on('click', '.modal', function(e) {
		e.preventDefault();

		$('.modal').addClass('hide');
		$('.modal-content').removeClass('active');

		lockUnlockScreen();
	});

	$(document).on('click', '.fechar', function(e) {
		e.preventDefault();
		
		$('.modal').trigger('click');
	});

	$(document).on('click', '.maisDetalhes', function(e) {
		e.preventDefault();
		
		$('.description').slideToggle();
	});	

	function showBackTopLink() {
		var top = $(window).scrollTop();

		if (top > 184) {
			$('a.back-top').addClass('opacity-1');
		} else {
			$('a.back-top').removeClass('opacity-1');
		}
	};

	function fadeMenu(screenWidth) {
		window.screenWidth = screenWidth;

		if ($('.menu').hasClass('open') || screenWidth > 1200) {
			$('.menu').fadeIn('slow');
		} else {
			$('.menu').fadeOut('slow');
		}
	};

	function lockUnlockScreen() {
		$('body').toggleClass('overflow-hidden');
	};

})