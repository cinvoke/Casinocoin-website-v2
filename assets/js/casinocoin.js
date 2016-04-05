$(document).ready( function() {
    $('#myCarousel2').carousel({
    	interval:   94000
	});
	
	var clickEvent = false;
	$('#myCarousel2').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
	
	
    $('#fillContent').html('<li><a href="#">Loading...</a></li>'); // Show "Downloading..."
    // Do an ajax request
    $.ajax({
        url: "https://casinocoin.org/currencies.php"
    }).done(function(data) { // data what is sent back by the php page
        $('#fillContent').html(data); // display data
    });


	$('#sidebar').affix({
		offset: {
			top: 245
		}
	});

	var $body   = $(document.body);
	var navHeight = $('.navbar').outerHeight(true) + 10;

	$body.scrollspy({
		target: '#leftCol',
		offset: navHeight
	});



    
	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41851204-17', 'casinocoin.org');
  ga('send', 'pageview');
	
	
	
});