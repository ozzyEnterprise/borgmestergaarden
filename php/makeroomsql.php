<?php
//Make a room
function makeRoom($post) {
  $sql = "INSERT INTO " .
           "rooms (" .
             "nameDK, " .
             "roomType, " .
             "maxPeople) " .
         "VALUES ('" .
           $post["newRoomNameDK"] . "', " .
           $post["newRoomType"] . ", " .
           $post["newRoomMaxPeople"] . ");";

  $result = runSql($sql);

  return true;
}
?>