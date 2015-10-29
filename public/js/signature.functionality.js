$(document).ready(function() {
    $("#signature").jSignature();

    $('#clear').click(function(event) {
    	$("#signature").jSignature('clear');
    });
})
