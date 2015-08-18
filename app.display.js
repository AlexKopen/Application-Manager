$(document).ready(function() {
	//Display JSON as a form

	console.log(jsonData);
	var jsonAsArray = $.parseJSON(jsonData);
	for (var i = 0; i < jsonAsArray.length; i++) {
		$('#form-display form').append('<input type="text" name = "' + jsonAsArray[i].name
			+ '"' + 'value = "' + jsonAsArray[i].value + '"><br>');
	};	
});
