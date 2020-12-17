// JavaScript Document

// add event listeners to #starters show/hide button
	$('#main-mission').click(function(e){
		e.preventDefault();
		var link = this;

		// changes button status
		$('#mission-info').toggleClass('.hide-info');

	});
