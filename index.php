<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>TimeToRead</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<style>
		* {
			box-sizing: border-box;
			font-family: 'Open Sans', sans-serif;
		}
		body {
			background: #d8e0e5;
			color: #666c74;
			padding: 15px 0;
		}
		.content {
			width: 620px;
			background: #fff;
			padding: 0px;
			box-shadow: 0 0 20px rgba(#000,0.1);
			margin: 0 auto;
		}
		.reading-time {
			background: #08c;
			color: #fff;
			padding: 10px 20px;
		}
		.reading-time p {
			margin: 0;
			padding: 0;
			line-height: 22px;
			font-weight: normal;
		}
		article {
			padding: 10px 20px;
		}
	</style>
</head>
<body>
	<?php
		require 'class/TimeToRead.php';

		// Get Content with API
		$content = file_get_contents('http://loripsum.net/api/10/long/headers');
		$contenttest = file_get_contents('http://loripsum.net/api/10/medium/headers');
		$readingtime = new TimeToRead(2.5);
	?>

	<div class="content">
		<div class="reading-time">
			<p>Reading time in min : <?php echo $readingtime->get_minutes($content); ?> min</p>
			<p>Reading time : <?php echo $readingtime->get_time($content); ?> </p>
		</div>
		<article>
			<?php echo $content; ?>
		</article>
	</div>
</body>
</html>