<?php
//check if a type name is already in use
function checkType($type) {
  $sql = "SELECT " .
           "nameDK " .
         "FROM " .
           "roomTypes;";
  $result = runSql($sql);
  while($row = $result->fetch_assoc()) {
    if ($row['nameDK'] == $type) {
      return true;
    }
  }
  return false;
}
?>