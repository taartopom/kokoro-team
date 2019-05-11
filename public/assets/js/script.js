$('.video a').on('click', function(event) {
	event.preventDefault();
	$('#youtube').attr('src', $(this).attr('href'));
});
