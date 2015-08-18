$(document).ready(function() {
	//Serialize all form data and convert to JSON on submit

	var jsonData;
	var spanFields;

	$('#simple-form').submit(function(event) {
		jsonData = JSON.stringify($(this).serializeArray());
		spanFields = $('#simple-form span');
		event.preventDefault();
	});


	//Display JSON as a form
	
	$('#display-button').click(function(event) {
		var jsonAsArray = $.parseJSON(jsonData);
		for (var i = 0; i < jsonAsArray.length; i++) {
			$('#form-display form').append('<span>' + spanFields.eq(i).text() + '</span><br>'
				+ '<input type="text" name = "' + jsonAsArray[i].name
				+ '"' + 'value = "' + jsonAsArray[i].value + '"><br>');
		};		
	});
});
