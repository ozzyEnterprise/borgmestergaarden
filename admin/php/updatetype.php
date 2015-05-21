<?php
//Update a type
function updateType($post) {
$sql = "UPDATE roomTypes SET " .
         "nameDK='" . $post['newTypeNameDK'] . "', " .
         "nameUK='" . $post['newTypeNameUK'] . "', " .
         "nameGR='" . $post['newTypeNameGR'] . "', " .
         "descriptionDK='" . $post['newTypeDescriptionDK'] . "', " .
         "descriptionUK='" . $post['newTypeDescriptionUK'] . "', " .
         "descriptionGR='" . $post['newTypeDescriptionGR'] . "' " .
       "WHERE " .
         "roomTypes.id = " . $post['id'] . " ;";

  $result = runSql($sql);

  return true;
}
?>