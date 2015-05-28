<?php
//List all data about a room
function roomData($id) {
  global $roomDataVar;
  $sql = "SELECT " .
           $roomDataVar .
         "FROM " .
           "rooms, " .
           "roomTypes " .
         "WHERE " .
           "rooms.roomType = roomTypes.id AND " .
           "rooms.id = " . $id . ";";

  return runSql($sql);
}
?>