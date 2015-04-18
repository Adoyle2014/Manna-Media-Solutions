$(document).ready(function() {

	var cw = $('.gallery-li').width();
	$('.gallery-li').css({'height':cw+'px'});


	$('ul#gallery li').each(function() {
		if(!$(this).hasClass("graphic-design")) {
			$(this).addClass("hidden");
		}
	});

	$('.portfolio-nav-a').on('click', function() {
		// Current class assignment
		$('.portfolio-nav-li.current').removeClass('current');
		$(this).parent().addClass('current');

		// set heading text
		$('#heading').text($(this).text());

		//Get and filter link text
		var catagory = $(this).text().toLowerCase().replace(' ', '-');

		// remove hidden class if "all projects" is selected
		/*if(catagory == 'graphic-design') {
			$('ul#gallery li:hidden').fadeIn('slow').removeClass('hidden');
		} else {*/
			$('ul#gallery li').each(function() {
				if(!$(this).hasClass(catagory)) {
					$(this).fadeOut('slow').addClass('hidden');
				} else {
					$(this).fadeIn('slow').removeClass('hidden');
				}
			});
		
		// Stop link behaviour
		return false;		
	});

	$('ul#gallery li').on('mouseenter', function() {
		var title = $(this).children().data('title');
		var desc = $(this).children().data('desc');

		if(desc == null) {
			desc = 'Click to enlarge';
		}

		if(title == null) {
			title = '';
		}

		// Create overlay div
		$(this).append('<div class="overlay"></div>');

		var overlay = $(this).children('.overlay');

		overlay.html('<h3>'+title+'</h3><p>'+desc+'</p>')

		overlay.fadeIn(800);
	});

	$('ul#gallery li').on('mouseleave', function() {
		$(this).append('<div class="overlay"></div>');

		var overlay = $(this).children('.overlay');

		overlay.fadeOut(500);
	})
});