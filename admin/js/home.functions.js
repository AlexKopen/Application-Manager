var initializeUIElements = function(){
	$( ".datepicker" ).datepicker();

    $( ".dialog" ).dialog({
      autoOpen: false
    });
}

var resetGrid = function(data){
	$(".dialog").dialog("destroy");
	$('#open-trips').html(data);
	initializeUIElements();
	bindAdminButtonEvents();
}

var bindAdminButtonEvents = function(){
	$('.delete-button').on('click', function() {

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
					success: function(data){
						resetGrid(data);
					}
				});		
			}
		});
	// Delete button is clicked
		
	});

	// Mark as Full button is clicked
	$('.full-button').on('click', function() {

		// Date to select
		var removeDate = $(this).attr('id');

		$.ajax({
			url: 'mark_full.php',
			type: 'GET',
			data: {date: removeDate},
			success: function (data){
				// Update table
				$.ajax({
					url: 'fetch_all_dates.php',
					type: 'POST',
					dataType: 'html',
					success: function(data){
						resetGrid(data);
					}
				});		
			}
		});
		
	});

	// Mark as Open button is clicked
	$('.open-button').on('click', function() {

		// Date to select
		var removeDate = $(this).attr('id');

		$.ajax({
			url: 'mark_open.php',
			type: 'GET',
			data: {date: removeDate},
			success: function (data){
				// Update table
				$.ajax({
					url: 'fetch_all_dates.php',
					type: 'POST',
					dataType: 'html',
					success: function(data){
						resetGrid(data);
					}
				});		
			}
		});
		
	});

	// Change Trip Leader button is clicked
	$('.trip-leader-button').on('click', function() {

		var newName = prompt("Please enter a new trip leader");

		// Do nothing if no valid new name is entered
		if ($.trim(newName) == ''){
			return;
		}

		// Date to select
		var removeDate = $(this).attr('id');

		$.ajax({
			url: 'change_leader.php',
			type: 'GET',
			data: {date: removeDate, name: newName},
			success: function (data){
				// Update table
				$.ajax({
					url: 'fetch_all_dates.php',
					type: 'POST',
					dataType: 'html',
					success: function(data){
						resetGrid(data);
					}
				});		
			}
		});
		
	});
}

$(document).ready(function() {

	initializeUIElements();
	bindAdminButtonEvents();

	//handle click events on the "Manage" buttons ... shows a jquery UI dialog box
	$( "#open-trips" ).on("click", ".dialog-container button", function(event) {
		$("div[id=" + $(event.target).attr("for") + "]").dialog("open");
	});

	// Add trip form is submitted
	$('#add-trip').submit(function(event) {

		$.ajax({
			url: 'add_trip.php',
			type: 'POST',
			data: { date: $( "input[name*='date']" ).val(), leader: $( "input[name*='leader']" ).val()},
			success: function (data){
				// Update table
				$.ajax({
					url: 'fetch_all_dates.php',
					type: 'POST',
					dataType: 'html',
					success: function (data){
						resetGrid(data);
					}
				});
			}
		});		

		event.preventDefault();
	});

});
