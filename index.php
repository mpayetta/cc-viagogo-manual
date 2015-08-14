<!DOCTYPE html>
<html>
<head>
	<title>Viagogo API Test</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>

<h3>Viagogo API Test</h3>

<form id="byQueryForm">
	<h4>Find by query</h4>
	<input type="text" id="eventQuery" name="query" placeholder="Search query"/>
	<button type="submit" id="submitByQuery">Find Events</button>
</form>

<script type="text/javascript">
	$(document).ready(function(){

	    $('#submitByQuery').click(function(e){
	    	e.preventDefault();
	        var query = $('#eventQuery').val();
	    	window.location.href="searchResult.php?query=" + query;
	    });

	});
</script>

</body>
</html>
