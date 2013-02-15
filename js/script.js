$(document).ready(function() {
	
	// adds game to today's list
	$('.addtoday').click(function() {
		$(this).parent().prependTo('#todaylist');
	}); // end click
	
	// clears today's list
	$('#clear-btn').click(function() {
		$('#todaylist').slideUp(500).fadeOut(500, function() {
			$(this).empty().fadeIn().slideDown();
			location.reload(false);
		}); // end slideUp
	}); // end click
	
	// makes today's list sortable
	$(function() {
    	$( "#todaylist" ).sortable();
    	$( "#todaylist" ).disableSelection();
	});
	
}); // end ready        