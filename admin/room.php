<?php
include 'php/checkuser.php';
?>

<!DOCTYPE html>
<html>
  <head>
  <meta name="author" content="Peter Pedersen">

  <link rel="stylesheet" type="text/css" href="style.css">
   <?php
      if (isset($_POST['editRoom'])) {
          checkAndMakeRoom($_POST, "edit");
      }
      if (isset($_POST['deletePicture'])) {
          deletePicture($_POST);
      }

     $roomID = $_POST['room'];
     $result = roomData($roomID);
     while($row = $result->fetch_assoc()) {
       $nameDK = $row['nameDK'];
       $nameUK = $row['nameUK'];
       $nameGR = $row['nameGR'];
       $roomType = $row['typeNameDK'];
       $maxPeople = $row['maxPeople'];
       $descriptionDK = $row['descriptionDK'];
       $descriptionUK = $row['descriptionUK'];
       $descriptionGR = $row['descriptionGR'];
       $shortDK = $row['shortDK'];
       $shortUK = $row['shortUK'];
       $shortGR = $row['shortGR'];
       $address = $row['address'];
     }

      if (isset($_POST['uploadPicture'])) {
          include '../php/uploadpicture.php';
      }
   ?>

   <?php
     print "<title>" . $nameDK . " - rediger værelse</title>";
   ?>

  </head>

  <body>
     <?php
     print "<h1>''" . $nameDK . "'' - (værelse) - rediger:</h1>" .
           "<form action='room.php' method='post'>" .
           userKey($user, $secretkey) .
           "<table>" .
             "<tr>" .
               "<td class='title'>Type:</td>" .
               "<td><select name='type'>";
                 $result = listTypes();
                 while($row = $result->fetch_assoc()) {
                     print "<option value='" . $row['id'] . "'";
                     if ($row['nameDK'] == $roomType) {
                       print " selected";
                     }
                     print ">" .
                     $row['nameDK'] . "</option>";
                 }
     print       "</select>" .
               "</td>" .
             "</tr>" .
             "<tr>" .
               "<td class='title'>Senge:</td>" .
               "<td>" .
                 "<select name='maxPeople'>";
                 for ($i = $minPersonsPerRoom; $i <= $maxPersonsPerRoom; $i++) {
                     print "<option value='" . $i . "'";
                     if ($i == $maxPeople) {
                       print " selected";
                     }
                     print ">" . $i . "</option>";
                 }
     print       "</select>" .
               "</td>" .
             "</tr>" .
           "</table>";
           roomEditBox("DK", $nameDK, $descriptionDK, $shortDK);
           roomEditBox("UK", $nameUK, $descriptionUK, $shortUK);
           roomEditBox("GR", $nameGR, $descriptionGR, $shortGR);
           pictureSection($roomID, $user, $secretkey);
     print "<div class='editbox'>" .
             "<input type='hidden' name='room' value='"
             . $roomID . "' />" .
             "<input type='hidden' name='oldName' value='" .
             $nameDK . "' />" .
             "<input type=submit name='editRoom' value='Gem' class='ok'/>" .
             "</form>" .
             "<form action='overview.php' method='post'>" .
             userKey($user, $secretkey) .
             "<input type=submit value='Tilbage til oversigten'" .
             " class='tilbage' />" .
             "</form>";
      print  "<form action='overview.php' method='post'>" .
             userKey($user, $secretkey) .
             "<table>" .
               "<tr>" .
                 "<td>" .
                   "<input type='hidden' name='id' value='"
                   . $roomID . "' />" .
                   "<input type=submit name='deleteRoom' " .
                   "value='Slet værelse!' class='cancel'/>" .
                 "</td>" .
                 "<td>" .
                   "<input type='password' name='deletepassword' value='' />" .
                 "</td>" .
               "</tr>" .
               "<tr>" .
                 "<td></td>" .
                 "<td>(skriv kodeord for at slette)</td>" .
               "</tr>" .
             "</table>" .
             "</form>" .
             "<table>" .
               "<tr>" .
                 "<td>" .
                   "<form action='room.php' method='post' " .
                   "enctype='multipart/form-data'>" .
                   "<input type='hidden' name='room' value='" .
                   $roomID . "' />" .
                   userKey($user, $secretkey) .
                   "Vælg billede:" .
                   "<input type='file' name='fileToUpload' id='fileToUpload'>" .
                 "</td>" .
               "</tr>" .
               "<tr>" .
                 "<th colspan='2'>" .
                   "<input type='submit' value='Upload Image'" .
                   "name='uploadPicture' class='ok'>" .
                   "</form>" .
                 "</td>" .
               "</tr>" .
             "</table>" .
           "</div>";
           //grundplansection();
     ?>
  </body>
</html>