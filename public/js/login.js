		$(document).ready(function() {
			$('#modal').hide();
			$('#modal article').hide();
			/* - - - - - - - - - - - - - - - - - - - - - */
			$('#btnOpenModal').click(function(event) {
				$('#modal').fadeIn('slow', function() {
					$('#modal article').show();
					$('#modal article').animate({top: '0px'}, 500);
				});
			});
			/* - - - - - - - - - - - - - - - - - - - - - */
			$('.cerrarmodal').click(function(event) {
				$('#modal article').animate({top: '-1000px'},
					500, function() {
					$(this).hide();
					$('#modal').fadeOut('slow');
				});
			});
		});
