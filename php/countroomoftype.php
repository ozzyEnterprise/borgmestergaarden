<?php
//Count how many rooms have a given room type
function countRoomOfType($type) {
  $sql = "SELECT " .
           "COUNT(rooms.id) as antal " .
         "FROM " .
           "rooms, " .
           "roomTypes " .
         "WHERE " .
           "rooms.roomType = roomTypes.id AND " .
           "rooms.roomType = " . $type  . ";";

     $res = runSql($sql);
     while($row = $res->fetch_assoc()) {
       $antal = $row['antal'];
     }
     return $antal;
}
?>
