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

	// Delete button is clicked
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

	// Delete operation for a single application is clicked
	$('.delete-link').on('click', function() {

		var removeID = $(this).attr('id');

		// Remove date from DB
		$.ajax({
			url: 'delete_application.php',
			type: 'GET',
			data: {id: removeID},
			success: function (data){
				console.log(data);
				// Update visible applications
				$.ajax({
					url: 'fetch_all_applications.php',
					type: 'POST',
					dataType: 'html',
					success: function(data){
						$('#all-applications').html(data);
					}
				});

				// Update trash
				$.ajax({
					url: 'fetch_all_trash.php',
					type: 'POST',
					dataType: 'html',
					success: function(data){
						$('#all-trash').html(data);
					}
				});					
			}
		});
		
	});

	//Toggle trash display
	$('#toggle-trash').on('click', function() {
		$(this).text() === 'View' ? $(this).text('Hide') : $(this).text('View');
		$('#all-trash').toggle();
	});

	// Restore operation for a single application is clicked
	$('.restore-link').on('click', function() {

		var removeID = $(this).attr('id');

		// Remove date from DB
		$.ajax({
			url: 'restore_application.php',
			type: 'GET',
			data: {id: removeID},
			success: function (data){
				console.log(data);
				// Update trash
				$.ajax({
					url: 'fetch_all_trash.php',
					type: 'POST',
					dataType: 'html',
					success: function(data){
						$('#all-trash').html(data);
					}
				});

				// Update visible applications
				$.ajax({
					url: 'fetch_all_applications.php',
					type: 'POST',
					dataType: 'html',
					success: function(data){
						$('#all-applications').html(data);
					}
				});					
			}
		});
		
	});	

});
