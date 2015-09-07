$(document).ready(function() {
	//Display JSON as a form

	var jsonAsArray = $.parseJSON(jsonData);

	var formInputs = $('form input, from textarea, form select');
	var currentValue = '';

	//Change value of input fields to match with the appropriate name from the JSON array
	for (var i = 0; i < jsonAsArray.length; i++) {
		currentValue = jsonAsArray[i].value;

		formInputs.each(function() {
			if ($(this).attr('name') == jsonAsArray[i].name) {
				$(this).val(jsonAsArray[i].value);
				return;
			};
		});
	};

});
