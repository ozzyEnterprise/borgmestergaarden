<?php
//Update a room
function updateRoom($post) {
$sql = "UPDATE rooms SET " .
         "nameDK='" . $post['newRoomNameDK'] . "', " .
         "nameUK='" . $post['newRoomNameUK'] . "', " .
         "nameGR='" . $post['newRoomNameGR'] . "', " .
         "roomType='" . $post['type'] . "', " .
         "maxPeople='" . $post['maxPeople'] . "', " .
         "descriptionDK='" . $post['newRoomDescriptionDK'] . "', " .
         "descriptionUK='" . $post['newRoomDescriptionUK'] . "', " .
         "descriptionGR='" . $post['newRoomDescriptionGR'] . "', " .
         "shortDK='" . $post['newShortDK'] . "', " .
         "shortUK='" . $post['newShortUK'] . "', " .
         "shortGR='" . $post['newShortGR'] . "', " .
         "address='" . $post['address'] . "' " .
       "WHERE " .
         "rooms.id = " . $post['room'] . " ;";

  $result = runSql($sql);

  return true;
}
?>