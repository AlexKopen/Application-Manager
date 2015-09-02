$(document).ready(function() {
	//Serialize all form data and convert to JSON on submit

	$('#applicant-form').submit(function(event) {
		var jsonData = JSON.stringify($(this).serializeArray());

		var nameData = $.trim($( "input[name*='first-name']" ).val()) + ' ' + $.trim($( "input[name*='middle-name']" ).val()) + ' ' + $.trim($( "input[name*='last-name']" ).val());

		$.ajax({
			url: 'application_insertion.php',
			type: 'GET',
			data: { name: nameData, trip: tripData, json: jsonData},
			success: function (data){
				data = $.trim(data);
				if(data == 'success'){
					window.location.replace('app_complete.php?success=true&trip=' + tripData);
				}else{
					window.location.replace('app_complete.php?success=false');
				}
			}			
		});

		event.preventDefault();
	});

});
