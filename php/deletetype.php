<?php
//Delete a type
function deleteType($type) {
  $sql = "DELETE FROM " .
           "roomTypes " .
         "WHERE " .
           "id =" . $type . ";";
  $run = runSql($sql);

  return true;
}
?>