<?php
//List infomation about rooms
function listRooms() {
    global $roomDataVar;
  $sql = "SELECT " .
         $roomDataVar .
         "FROM " .
           "rooms, " .
           "roomTypes " .
         "WHERE " .
           "rooms.roomType = roomTypes.id;";
  return runSql($sql);
}
?>