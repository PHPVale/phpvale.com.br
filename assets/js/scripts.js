$(document).ready(function() {
	
	window.screenWidth = 0;

	var owl = $('#slideEvents');

	owl.owlCarousel({
		touchDrag: false,
		mouseDrag: false,
		responsive : {
		    0 : {
		        items: 1
		    },
		    699 : {
		        items: 2
		    },
		    1199 : {
		    	items: 4
		    }
		}
	});

	$('.events .next').click(function() {
		owl.trigger('next.owl.carousel');
		
		window.screenWidth = $(window).outerWidth();

		verifySlideItem();
	});

	$('.events .prev').click(function() {
		owl.trigger('prev.owl.carousel');

		window.screenWidth = $(window).outerWidth();

		verifySlideItem();
	});

	// Galeria 

	var owlParticipations = $('#slideParticipations');

	owlParticipations.owlCarousel({
		items: 1,
		loop: true
	});

	$('#galery.next').click(function() {
		owlParticipations.trigger('next.owl.carousel');
	});

	$('#galery.prev').click(function() {
		owlParticipations.trigger('prev.owl.carousel');
	});

	showBackTopLink();

	$(window).load(function(e) {
		$('.loading').fadeOut('fast');
	});

	$(window).on('resize', function(e) {
		var screenWidth = $(this).outerWidth();

		fadeMenu(screenWidth);
	});

	$(window).on('scroll', function() {
		showBackTopLink();
	});

	$(document).on('click', '.selectCategoryTag', function(e) {
		e.preventDefault();

		$(".tags a").removeClass('selected');
		var category = $(this).addClass('selected').attr('data-category');
		
		$("#iptCategory").attr('type', 'hidden');

		if (!category) {
			$("#iptCategory").attr('type', 'text');
		}

		$("#iptCategory").val(category);
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

	function verifySlideItem() {
		var total = $('#slideEvents .item').length;

		var ativo = $('#slideEvents .owl-item.active').find('.item').attr('data-slide');

		if (ativo == 1) {
			$('.events .prev').addClass('hide');
		} else {
			$('.events .prev').removeClass('hide');
		}
		
		$('.events .next').removeClass('hide');

		if (window.screenWidth <= 699 && ativo == total ||
		   (window.screenWidth >= 700 && window.screenWidth <= 1199) && ativo == (total - 1) ||
		   window.screenWidth > 1200 && ativo == (total - 3)) {
			$('.events .next').addClass('hide');
		}
	}

})