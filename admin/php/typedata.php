<?php
//Show data about a specific type
function typeData($id) {
    global $typeDatavar;
  $sql = "SELECT " .
           $typeDatavar .
         "FROM " .
           "roomTypes " .
         "WHERE " .
           "id =" . $id . ";";
  return runSql($sql);
}
?>