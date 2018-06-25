<!DOCTYPE html>
<?php
	// header('Content-type: text/html; charset=utf-8');
	include 'functions.php';
?>
<html>
<head>
	<title>Diablo</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<style>
		html, body, canvas{
			margin: 0;
			padding: 0;
			background: black;
			display:block;
			color:rgb(169, 152, 119);
			font-family: Verdana, sans-serif;
			font-size: 13px;
		}
		canvas{
			-webkit-user-select: none;
			-moz-user-select: none;
			-khtml-user-select: none
		}
		a{
			color: #d96500;
		}
		.page{
			margin: 0 auto;
			width: 980px;
		}
		#died-img {
			display: none;
			width: 500px;
			position: relative;
			padding-top: 10%;
			margin: 0 auto;
		}
		#died-content {
			width: 100%;
			height: 100%;
			left: 0;
			display: none;
			position: fixed;
			background: rgba(0,0,0,0.4)
		}
		#questions {
			background: url("sprite/papyrus-3.png") no-repeat center center;
			background-size: contain;
			display:  block;
			position:  relative;
			width: 450px;
			height: 20%;
			margin: 0 auto;
			padding: 100px;
			color: #000;
		}
		li {
			list-style: none;
		}
		.winner-text {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100%;
			font-size: 3em;
		}
	</style>
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