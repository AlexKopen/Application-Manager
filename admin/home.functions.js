$(document).ready(function() {

	// Delete button is clicked
	$('#open-trips').on('click', '.delete', function() {

		// Date to remove from delete button's id attribute
		var removeDate = $(this).attr('id');

		// Remove date from DB
		$.ajax({
			url: 'delete_date.php',
			type: 'GET',
			data: {date: removeDate},
			success: function (){
				// Update table
				$.ajax({
					url: 'fetch_all_dates.php',
					type: 'POST',
					dataType: 'html',
					success: function (data){
						$('#open-trips').html(data);
					}
				});		
			}
		});
		
	});

	// Add trip form is submitted
	$('#add-trip').submit(function(event) {
		$.post('add_trip.php', $('#add-trip').serialize(), function(data) {

			// Update table
			$.ajax({
				url: 'fetch_all_dates.php',
				type: 'POST',
				dataType: 'html',
				success: function (data){
					$('#open-trips').html(data);
				}
			});

		});

		event.preventDefault();
	});

});
