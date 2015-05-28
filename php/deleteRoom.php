<?php
//Delete a room
function deleteRoom($room) {
  $sql = "DELETE FROM " .
           "rooms " .
         "WHERE " .
           "id =" . $room . ";";

  $run = runSql($sql);

  return true;
}
?>