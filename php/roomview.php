<?php
	function GetPreviews() {
	  $listofrooms = listRooms();
		while($row = $listofrooms->fetch_assoc()) {
			foreach ($row as $key => $value) {
				if ($key == 'id') {
					$picid = $value;
				}
			}
			$path = "graphics/roompics/" . $picid . "/";
			$findPictures = "*.{jpg,png,gif}";
			$piclist = glob($path . $findPictures, GLOB_BRACE);
		}
		$html = "";
		foreach ($piclist as $pic) {
			$html = $html . "<img src='" . $pic . "' width='180' height='98' alt>";
		}
		return $html;
	}
?>