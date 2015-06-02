<?php
	function GetNav($active) {
		$navs = array(
			0 => "<a href='home.php'>Forside</a>",
			1 => "<a href='rooms.php?type=0&id=-1'>Lejligheder</a>",
			2 => "<a href='rooms.php?type=1&id=-1'>V&aeligrelser</a>",
			3 => "<a href='rooms.php?type=2id=-1'>M&oslashdelokaler</a",
			4 => "<a href='info.php'>Info</a>",
			5 => "<a href='links.php'>Links</a>",
			6 => "<a href='contact.php'>Kontakt</a>",
		);
		
		$nav = "";
		for ($i = 0; $i < sizeof($navs); $i++) {
				if($i == $active) {
					$nav = $nav . "<li class='active'>" . $navs[$i] . "</li>";
				}
				else {
					$nav = $nav . "<li>" . $navs[$i] . "</li>";
				}
		}
		$nav = "<nav><ul>" . $nav . "</ul></nav>";
		return $nav;	
	}
?>