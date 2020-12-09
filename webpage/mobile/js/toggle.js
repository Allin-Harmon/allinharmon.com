// JavaScript Document

function dropdown(id){
	$(id+' > .collapse-btn a').click(function(e){
		e.preventDefault();
		//var link = this;

		// changes button status
		//$('#mission .company').toggleClass('hide-company');
		$(this).parent().parent().children('.category').children('.company').toggleClass('hide-main');
	});
}

$(function(){
		//dropdown('#automotive', '#dining', '#lodging', '#retail', '#services');
		//dropdown('#automotive')
		dropdown('#mission')
		dropdown('#services')
		dropdown('#contact')

})

/*
// add event listeners to #starters show/hide button
	$('#automotive > .collapse-btn > a').click(function(e){
		e.preventDefault();
		//var link = this;

		// changes button status
		//$('#automotive .company').toggleClass('hide-company');
		$(this).parent().parent().children('.category').children('.company').toggleClass('hide-company');
	});


// add event listeners to #starters show/hide button
	$('#dining').click(function(e){
		e.preventDefault();
		var link = this;

		// changes button status
		$('#dining .company').toggleClass('hide-company');
	});

// add event listeners to #starters show/hide button
	$('#lodging').click(function(e){
		e.preventDefault();
		var link = this;

		// changes button status
		$('#lodging .company').toggleClass('hide-company');
	});

// add event listeners to #starters show/hide button
	$('#retail').click(function(e){
		e.preventDefault();
		var link = this;

		// changes button status
		$('#retail .company').toggleClass('hide-company');
	});

// add event listeners to #starters show/hide button
	$('#services').click(function(e){
		e.preventDefault();
		var link = this;

		// changes button status
		$('#services .company').toggleClass('hide-company');
	});
*/