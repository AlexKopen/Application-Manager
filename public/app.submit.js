$(document).ready(function() {
	//Serialize all form data and convert to JSON on submit

	var jsonData;

	$('#applicant-form').submit(function(event) {
		jsonData = JSON.stringify($(this).serializeArray());
		console.log(jsonData);
		event.preventDefault();
	});

});
