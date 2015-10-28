$(document).ready(function() {

	// Delete button is clicked
	$('#open-trips').on('click', '.delete-button', function() {

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

	// Mark as Full button is clicked
	$('#open-trips').on('click', '.full-button', function() {

		// Date to select
		var removeDate = $(this).attr('id');

		$.ajax({
			url: 'mark_full.php',
			type: 'GET',
			data: {date: removeDate},
			success: function (data){
				console.log(data);
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

	// Mark as Open button is clicked
	$('#open-trips').on('click', '.open-button', function() {

		// Date to select
		var removeDate = $(this).attr('id');

		$.ajax({
			url: 'mark_open.php',
			type: 'GET',
			data: {date: removeDate},
			success: function (data){
				console.log(data);
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

	// Change Trip Leader button is clicked
	$('#open-trips').on('click', '.trip-leader-button', function() {

		var newName = prompt("Please enter a new trip leader");

		// Date to select
		var removeDate = $(this).attr('id');

		$.ajax({
			url: 'change_leader.php',
			type: 'GET',
			data: {date: removeDate, name: newName},
			success: function (data){
				console.log(data);
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
