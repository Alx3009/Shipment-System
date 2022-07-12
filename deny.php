<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$idaddshipment = $_GET["id"];

// ambil data di URL
if (deny($idaddshipment) > 0) {
    echo "
		<script>
			alert('Denied');
			document.location.href = 'cancellationshipment.php';
		</script>
	";
} else {
    echo "
    	<script>
    		alert('Error');
    		document.location.href = 'cancellationshipment.php';
    	</script>
    ";
}
