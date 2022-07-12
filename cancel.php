<?php
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// ambil data di URL
$idaddshipment = $_GET["id"];

// query data mahasiswa berdasarkan id
// $shipment = query("SELECT * FROM addshipment WHERE idaddshipment = $idaddshipment")[0];


	// cek apakah data berhasil diubah atau tidak
	if (cancel($idaddshipment) > 0) {
		echo "
			<script>
				alert('cancelled!');
				document.location.href = 'cancellationshipment.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('cancelled!');
				document.location.href = 'cancellationshipment.php';
			</script>
		";
	}
