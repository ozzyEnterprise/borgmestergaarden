<html lang="da">
	<head>
		<?php 
			include 'php/nav.php'; 
			include 'php/roomview.php';
			include 'php/booking.php'; 
		?>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Hotel Borgmestergaarden - Middelfart Byferie, ferielejligheder, m&oslash;decenter</title>
	</head>
	<body> 
		<header id="banner" class="body">
			<?php echo GetNav($_GET["type"]) ?>
		</header>
		<center>
			<section id="content" class="body">
				<!--<h3><b>Nyt hotel i Middelfart centrum med udsigt over Lilleb&aeliglt. </b></h3>-->
			</section>
		</center>
		<div class="content">
			<aside class="column left">
				<?php echo GetPreviews($_GET["type"]); ?>
			</aside>
			<aside class="column centerT">
				<?php echo GetRoomMainPic($_GET["id"], $_GET["p"]); ?>
			<aside>
			<aside class="column centerB">
				<?php echo GetRoomPics($_GET["id"]); ?>
			<aside>
		</div>
	</body>
</html>
