<?php
//Checks if a room name is already in use
function checkRoom($room) {
  $sql = "SELECT " .
           "nameDK " .
         "FROM " .
           "rooms;";
  $result = runSql($sql);
  while($row = $result->fetch_assoc()) {
    if ($row['nameDK'] == $room) {
      return true;
    }
  }
  return false;
}
?>