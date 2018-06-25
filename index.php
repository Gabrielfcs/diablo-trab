<!DOCTYPE html>
<?php
	header('Content-type: text/html; charset=utf-8');
	include 'connect/connect.php';
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
	</style>
</head>
<body>
	<div class="page">
		<canvas id="floor" width="980" height="661" style="position: fixed;"></canvas>
		<?php 
				$sql = 'select * from `'.$dbname.'`.'.$tb_questions.' order by rand() limit 1;';
				$result = mysqli_query($connection, $sql);
				while ($row = mysqli_fetch_array($result)){
					$question_text = $row['question_text'];
					$answer_a = $row['answer_a'];
					$answer_b = $row['answer_b'];
					$answer_c = $row['answer_c'];
					$answer_d = $row['answer_d'];
					$answer_e = $row['answer_e'];
					$correct_answer = $row['correct_answer'];
				}
		?>
		<div id="died-content">
			<img id="died-img" src="sprite/died-title.png">
			<div id="questions">
				<span id="question"><?php echo $question_text ?></span>
				<ul>
					<li><input type="radio" name="answer" value="a"> A) <span><?php echo $answer_a?></span></li>
					<li><input type="radio" name="answer" value="b"> B) <span><?php echo $answer_b?></span></li>
					<li><input type="radio" name="answer" value="c"> C) <span><?php echo $answer_c?></span></li>
					<li><input type="radio" name="answer" value="d"> D) <span><?php echo $answer_d?></span></li>
					<li><input type="radio" name="answer" value="e"> E) <span><?php echo $answer_e?></span></li>     
				</ul>
			</div>
		</div>
	</div>
	<script src="diablo.js"></script>
</body>
</html>