// JavaScript Document

$(document).ready(function(){
	
	// first create a placeholder image and paragraph for captions
	$('#pic').html('<img src="images/advertising/alienware_p1.jpg" alt="image1" id="placeholder" />');
	$('<p id="caption">Alienware Introduction Page</p>').appendTo('#pic');
	
	// add event listeners to thumbnail images to change placeholders
	$('#links a').click(function(e){
		e.preventDefault();
		var link = this;
	 	
		// changes image and caption	
		$('#placeholder').fadeOut('fast',function(){
			$('#caption').text(link.title);	
			$(this).attr('src', link.href);	
			$(this).fadeIn('slow');
		});

		// changes status indication
		$('#links a').removeClass('statusOn');
		$(link).addClass('statusOn');
	});
		
	// set up album links
	$('#albums a').click(function(e){
		e.preventDefault();
		$('#links div').hide();	
		var url = '#' + this.href.split('#')[1];
		$(url).fadeIn('slow');
	
	    $('#placeholder').fadeOut('fast', function(e){
			// change placeholder with album change
			$('#placeholder').attr('src', $(url + ' a').eq(0).attr('href'));	
			
			// change caption with album change
			$('#caption').text($(url + ' a').eq(0).attr('title'));
			$(this).fadeIn('slow')
		});	
		
		// changes status indication
		$('#albums a').removeClass('statusOn');
		$(this).addClass('statusOn');
	
	});
	
	// add/remove classes for graceful degradation
	$('#wcf_content').removeClass('show_content');
	$('#wcf_content').addClass('hide_content');
		

	// add event listeners to #wcf show/hide button
	$('#wcf_content').click(function(e){
		e.preventDefault();
		var link = this;
		
		// changes button status
		$('#wcf_content').toggleClass('show_content');
		$(link).toggleClass('hide_content');
	});
	
	// add/remove classes for graceful degradation
	$('#galapagos_content').removeClass('show_content');
	$('#galapagos_content').addClass('hide_content');
		

	// add event listeners to #galapagos show/hide button
	$('#galapagos_content').click(function(e){
		e.preventDefault();
		var link = this;
		
		// changes button status
		$('#galapagos_content').toggleClass('show_content');
		$(link).toggleClass('hide_content');
		
	});
	
	// add/remove classes for graceful degradation
	$('#cssZen_content').removeClass('show_content');
	$('#cssZen_content').addClass('hide_content');
		

	// add event listeners to #cssZen show/hide button
	$('#cssZen_content').click(function(e){
		e.preventDefault();
		var link = this;
		
		// changes button status
		$('#cssZen_content').toggleClass('show_content');
		$(link).toggleClass('hide_content');
		
	});
	
	
	// add/remove classes for graceful degradation
	$('#pet_minder_content').removeClass('show_content');
	$('#pet_minder_content').addClass('hide_content');
		

	// add event listeners to #pet_minder show/hide button
	$('#pet_minder_content').click(function(e){
		e.preventDefault();
		var link = this;
		
		// changes button status
		$('#pet_minder_content').toggleClass('show_content');
		$(link).toggleClass('hide_content');
		
	});
	
	
	// add/remove classes for graceful degradation
	$('#aia_app_content').removeClass('show_content');
	$('#aia_app_content').addClass('hide_content');
		

	// add event listeners to #aia_app show/hide button
	$('#aia_app_content').click(function(e){
		e.preventDefault();
		var link = this;
		
		// changes button status
		$('#aia_app_content').toggleClass('show_content');
		$(link).toggleClass('hide_content');
		
	});
	
	
	// add/remove classes for graceful degradation
	$('#stillwater_content').removeClass('show_content');
	$('#stillwater_content').addClass('hide_content');
		

	// add event listeners to #wcf show/hide button
	$('#stillwater_content').click(function(e){
		e.preventDefault();
		var link = this;
		
		// changes button status
		$('#stillwater_content').toggleClass('show_content');
		$(link).toggleClass('hide_content');
	});
	
	
	// add/remove classes for graceful degradation
	$('#nachos_content').removeClass('show_content');
	$('#nachos_content').addClass('hide_content');
		

	// add event listeners to #wcf show/hide button
	$('#nachos_content').click(function(e){
		e.preventDefault();
		var link = this;
		
		// changes button status
		$('#nachos_content').toggleClass('show_content');
		$(link).toggleClass('hide_content');
	});
	
	
	// add/remove classes for graceful degradation
	$('#proj1_content').removeClass('show_content');
	$('#proj1_content').addClass('hide_content');
		

	// add event listeners to #aia_app show/hide button
	$('#proj1_content').click(function(e){
		e.preventDefault();
		var link = this;
		
		// changes button status
		$('#proj1_content').toggleClass('show_content');
		$(link).toggleClass('hide_content');
		
	});
	
	
	// add/remove classes for graceful degradation
	$('#proj2_content').removeClass('show_content');
	$('#proj2_content').addClass('hide_content');
		

	// add event listeners to #aia_app show/hide button
	$('#proj2_content').click(function(e){
		e.preventDefault();
		var link = this;
		
		// changes button status
		$('#proj2_content').toggleClass('show_content');
		$(link).toggleClass('hide_content');
		
	});
	
	
	// add/remove classes for graceful degradation
	$('#proj3_content').removeClass('show_content');
	$('#proj3_content').addClass('hide_content');
		

	// add event listeners to #aia_app show/hide button
	$('#proj3_content').click(function(e){
		e.preventDefault();
		var link = this;
		
		// changes button status
		$('#proj3_content').toggleClass('show_content');
		$(link).toggleClass('hide_content');
		
	});
	
	// add event listeners to #*_content hover
	$('.content_div').hover(function () {
    	$(this).addClass("hover");
  	}, function () {
    	$(this).removeClass("hover");
  	}
	);
	
	
});