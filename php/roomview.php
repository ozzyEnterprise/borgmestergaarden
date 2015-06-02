<?php
	function GetPreviews($roomType) {
	
		$sql = "SELECT
         roomType, id
         FROM
           rooms
	     WHERE
		   roomType = $roomType";
		$result = runSql($sql); 
		if(!$result) return var_dump($result);
		$linklist = array();
		$selectedPics = array();
		while($row = $result->fetch_assoc()) {
			foreach ($row as $key => $value) {
				if ($key == 'id') {
					$picid = $value;
				}
				else if ($key == 'roomType') {
					$type = $value;
				}
			}
			$path = "graphics/roompics/" . $picid . "/";
			$findPictures = "*.{jpg,png,gif}";
			$piclist = glob($path . $findPictures, GLOB_BRACE);
			$link = "rooms.php?type=" . $type . "&id=" . $picid . "&p=0"; 
			array_push($linklist, $link);
			if($piclist != null) array_push($selectedPics, $piclist[0]);
		}
		$html = "";
		for ($i = 0; $i < sizeof($selectedPics); $i++) {
			$link = $linklist[$i];
			$html = $html . "<a href='$link'><img src='" . $selectedPics[$i] . "' width='180' height='98' alt></a>";
		}
		return $html;
	}
	
	function GetRoomPics($roomId) {
		if($roomId == -1) return null;
		$sql = "SELECT
         roomType, id
         FROM
           rooms
         WHERE 
           rooms.id = $roomId;";
		$result = runSql($sql); 
		if(!$result) return var_dump($result);
		$row = $result->fetch_assoc();
		$id = $row["id"];
		$type = $row["roomType"];
		
		$path = "graphics/roompics/" . $roomId . "/";
		$findPictures = "*.{jpg,png,gif}";
		$piclist = glob($path . $findPictures, GLOB_BRACE);
		$html = "";
		for ($i = 0; $i < sizeof($piclist); $i++) {
			$link = "rooms.php?type=" . $type . "&id=" . $id . "&p=" . $i; 
			$html = $html . "<a href='$link'><img src='" . $piclist[$i] . "' width='305' height='175' alt></a>";
		}
		return $html;
	}
	
	function GetRoomMainPic($roomId, $index) {
		if($roomId == -1) return null;
		$path = "graphics/roompics/" . $roomId . "/";
		$findPictures = "*.{jpg,png,gif}";
		$piclist = glob($path . $findPictures, GLOB_BRACE);
		return "<img src='" . $piclist[$index] . "' width='710' height='351' alt>";
	}
?>