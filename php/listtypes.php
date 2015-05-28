<?php
function listTypes() {
  //List all room types
    global $typeDatavar;
    $sql = "SELECT DISTINCT " .
             $typeDatavar .
           "FROM " .
             "roomTypes;";

    return runSql($sql);
}
?>