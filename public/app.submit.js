$(document).ready(function() {
	//Serialize all form data and convert to JSON on submit

	var jsonData;

	$('#applicant-form').submit(function(event) {
		jsonData = JSON.stringify($(this).serializeArray());

		var name = $.trim($( "input[name*='first-name']" ).val()) + ' ' + $.trim($( "input[name*='middle-name']" ).val()) + ' ' + $.trim($( "input[name*='last-name']" ).val());

		console.log(name);

		// $.ajax({
		// 	url: 'application_insertion.php',
		// 	type: 'GET',
		// 	data: {json: jsonData},
		// 	success: function (data){
		// 		console.log(data);	
		// 	}			
		// });
		

		event.preventDefault();
	});

});
