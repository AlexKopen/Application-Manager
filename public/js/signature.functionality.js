$(document).ready(function() {
	// Bind the signature application
    $("#signature").jSignature();

    // Clear button for the signature
    $('#clear').click(function(event) {
    	$("#signature").jSignature('clear');
    });
})
