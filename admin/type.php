<?php
include 'php/checkuser.php';
?>

<!DOCTYPE html>
<html>
  <head>
  <meta name="author" content="Peter Pedersen">

  <link rel="stylesheet" type="text/css" href="style.css">

  <?php
      if (isset($_POST['editType'])) {
          checkAndMakeType($_POST, "edit");
      }
      $typeID = $_POST['type'];
      $result = typeData($typeID);
      while($row = $result->fetch_assoc()) {
          $nameDK = $row['nameDK'];
          $nameUK = $row['nameUK'];
          $nameGR = $row['nameGR'];
          $descriptionDK = $row['descriptionDK'];
          $descriptionUK = $row['descriptionUK'];
          $descriptionGR = $row['descriptionGR'];
      }
      $typeNumberOfRooms = countRoomOfType($typeID);
  ?>

   <?php
     print "<title>" . $nameDK . " - rediger værelsestype</title>";
   ?>

  </head>

  <body>
     <?php
       print "<h1>''" . $nameDK . "''- (type) - rediger:</h1>" .
             "<form action='overview.php' method='post'>" .
             userKey($user, $secretkey) .
             "<table>" .
               "<tr>" .
                 "<td class='title'>Værelser af denne type:</td><td>" .
                    $typeNumberOfRooms .
                 "</td>" .
               "</tr>" .
             "</table>" .
             "</form>" .
             "<form action='type.php' method='post'>" .
             userKey($user, $secretkey);
             typeEditBox("DK", $nameDK, $descriptionDK);
             typeEditBox("UK", $nameUK, $descriptionUK);
             typeEditBox("GR", $nameGR, $descriptionGR);
         print "<div class='editbox'>" .
                 "<input type='hidden' name='id' value='"
                 . $typeID . "' />" .
                 "<input type='hidden' name='type' value='"
                 . $typeID . "' />" .
                 "<input type='hidden' name='oldName' value='"
                 . $nameDK . "' />" .
                 "<input type=submit name='editType' value='Gem' class='ok'/>" .
                 "</form>" .
                 "<form action='overview.php' method='post'>" .
                 userKey($user, $secretkey) .
                 "<input type=submit value='Tilbage til oversigten'" .
                 " class='tilbage' />" .
                 "</form>";
                 if ($typeNumberOfRooms == 0) {
         print   "<form action='overview.php' method='post'>" .
                 userKey($user, $secretkey) .
                 "<table>" .
                   "<tr>" .
                     "<td>" .
                       "<input type='hidden' name='id' value='"
                       . $typeID . "' />" .
                       "<input type=submit name='deleteType' " .
                       "value='Slet type!' class='cancel'/>" .
                     "</td>" .
                     "<td>" .
                       "<input type='password' name='deletepassword' " .
                       "value='' />" .
                     "</td>" .
                   "</tr>" .
                   "<tr>" .
                     "<td></td>".
                     "<td>(skriv kodeord for at slette)</td>" .
                   "</tr>" .
                 "</table>" .
                 "</form>" .
               "</div>";
                 }
     ?>
  </body>
</html>