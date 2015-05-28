<!DOCTYPE html>
<html>
  <head>
<?php
include 'php/booking.php';
?>
  <meta name="author" content="Peter Pedersen">

  <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body>
<?php
      $listofrooms = listRooms();
while($row = $listofrooms->fetch_assoc()) {
    print "<br><br>---------------------------------------------------<br><br>";
    foreach ($row as $key => $value) {
        if ($key == 'id') {
            $picid = $value;
        }
        print "| " . $key . " : " . $value . " | <br />";
    }
    $path = "graphics/roompics/" . $picid . "/";
    $findPictures = "*.{jpg,png,gif}";
    $piclist = glob($path . $findPictures, GLOB_BRACE);
    foreach ($piclist as $picture) {
        print "<img src='" . $picture  . "' height='100px' width='100px'/>";
    }
}
      ?>
  </body>
</html>