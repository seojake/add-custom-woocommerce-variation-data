jQuery(document).ready(function($){
	"use strict";

	$('.single_variation_wrap').on('show_variation', function(event, variation){
		console.table(variation); // You'll see the custom data inside the console
	});

});
