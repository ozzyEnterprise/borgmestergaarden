<?php
//Make a type
function makeType($post) {
  $sql = "INSERT INTO " .
         "roomTypes (" .
           "nameDK) " .
         "VALUES ('" .
           $post["newTypeNameDK"] . "');";

  $result = runSql($sql);

  return true;
}
?>