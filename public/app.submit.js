$(document).ready(function() {
	//Submit the application

	// Check for legal acceptance
    $('#waiver-checkbox-left input').change(function() {
        if($(this).is(":checked")) {
			$('#submit-container input').prop("disabled", false);
			$('#submit-container').show();
			$("html, body").animate({ scrollTop: $(document).height() }, "slow");
        } else {
			$('#submit-container input').prop("disabled", true);
			$('#submit-container').hide();
        }
    });	

    // Submit with AJAX
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
