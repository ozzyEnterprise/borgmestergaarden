<html lang="da">
	<head>
		<?php 
			include 'php/nav.php'; 
			include 'php/roombiew.php';
			include 'php/bookings.php'; 
		?>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Hotel Borgmestergaarden - Middelfart Byferie, ferielejligheder, m&oslash;decenter</title>
	</head>
	<body> 
		<header id="banner" class="body">
			<?php echo GetNav($_GET["type"] + 1) ?>
		</header>
		<center>
			<section id="content" class="body">
				<!--<h3><b>Nyt hotel i Middelfart centrum med udsigt over Lilleb&aeliglt. </b></h3>-->
			</section>
		</center>
		<div class="content">
			<aside class="column left">
				<?php echo GetPreviews(); ?>
			</aside>
			<aside class="column centerT">
				<img src="graphics/sample01.jpg" width="710" height="351" alt>
			<aside>
			<aside class="column centerB">
				<img src="graphics/sample01.jpg" width="305" height="175" alt>
				<img src="graphics/sample02.jpg" width="305" height="175" alt>
			<aside>
		</div>
	</body>
</html>
