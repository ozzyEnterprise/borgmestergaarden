<?php
//Limit a long text to show only the first fraction
function cutDescription($description) {
  global $descriptionLengthLimit;
  if (strlen($description) <= $descriptionLengthLimit) {
    return $description;
  } else {
    return substr($description, 0, ($descriptionLengthLimit - 3)) . "...";
  }
}
?>