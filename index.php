<!DOCTYPE html>
<?php
	// header('Content-type: text/html; charset=utf-8');
	include 'functions.php';
?>
<html>
<head>
	<title>Diablo</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="page">
		<canvas id="floor" width="980" height="661" style="position: fixed;"></canvas>
		<div id="died-content">
			<img id="died-img" src="sprite/died-title.png">
			<div id="questions">
			</div>
		</div>
	</div>
	<script src="diablo.js"></script>
</body>
</html>