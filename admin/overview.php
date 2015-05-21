<?php
include 'php/checkuser.php';
?>

<!DOCTYPE html>
<html>
  <head>
  <meta name="author" content="Peter Pedersen">

  <link rel="stylesheet" type="text/css" href="style.css">
  <?php
      if (isset($_POST['makeType'])) {
          checkAndMakeType($_POST, "make");
      }
      if (isset($_POST['deleteType'])) {
              deleteType($_POST['id']);
      }
      if (isset($_POST['deleteRoom'])) {
              deleteRoom($_POST['id']);
      }
      if (isset($_POST['makeRoom'])) {
          checkAndMakeRoom($_POST, "make");
      }
  ?>

  <title>Oversigt over værelser på borgmestergaarden</title>

  </head>

  <body>
   <h1>Værelser på borgmestergaarden:</h1>

   <?php
     print "<table>" .
             "<tr>" .
               "<td class='title'>Vaerelsesnavn</td>" .
               "<td class='title'>Type</td>" .
               "<td class='title'>Senge</td>" .
               "<td></td>" .
               "<td class='title'>Kort Beskrivelse</td>" .
               "<td class='title'>Antal billeder</td>" .
               "<td class='title'>Grundplan</td>" .
           "</tr>";
     $result = listRooms();
     while($row = $result->fetch_assoc()) {
       print "<tr>" .
               "<td>" . $row['nameDK'] . "</td>" .
               "<td>" . $row['typeNameDK'] . "</td>" .
               "<td>" . $row['maxPeople'] . "</td>" .
               "<td>" .
                 "<form action='room.php' method='post'>" .
                   userKey($user, $secretkey) .
                   "<input type='hidden' name='room' value='"
                   . $row['id'] . "'>" .
                   "<input type='submit' value='Rediger'>" .
                 "</form>" .
               "</td>" .
               "<td>" . cutDescription($row['shortDK']) . "</td>" .
               "<td>" . "antal vaerelser" . "</td>" .
               "<td>" . "grundplan?" . "</td>" .
             "</tr>";
     }

     print "<form action='overview.php' method='post'>" .
           userKey($user, $secretkey) .
           "<tr>" .
             "<td><input type='text' name='newRoomNameDK' /></td>" .
             "<td>".
               "<select name='newRoomType'>";
               $result = listTypes();
               while($row = $result->fetch_assoc()) {
                 print "<option value='" . $row['id']  . "'>" .
                       $row['nameDK'] . "</option>";
               }
     print     "</select>" .
             "</td>" .
             "<td>" .
               "<select name='newRoomMaxPeople'>";
               for ($i = $minPersonsPerRoom; $i <= $maxPersonsPerRoom; $i++) {
                   print "<option value='" . $i . "'>" . $i . "</option>";
               }
     print     "</select>" .
             "</td>" .
             "<td>" .
               "<input type='submit' name='makeRoom' value='Opret vaerelse'>" .
             "</td>" .
           "</tr>" .
           "</table>" .
           "</form>";
   ?>

   <h1>Vaerelsestyper:</h1>

   <?php
     print "<table>" .
             "<tr>" .
               "<td class='title'>Navn</td>" .
               "<td></td>" .
               "<td class='title'>Antal værelser</td>" .
               "<td class='title'>Beskrivelse</td>" .
             "</tr>";
             $result = listTypes();
             while($row = $result->fetch_assoc()) {
               print "<tr>" .
                       "<td>" . $row['nameDK'] . "</td>" .
                       "<td>" .
                         "<form action='type.php' method='post'>" .
                         userKey($user, $secretkey) .
                         "<input type='hidden' name='type' value='" .
                         $row['id'] . "'>" .
                         "<input type='submit' value='Rediger'>" .
                         "</form>" .
                       "</td>" .
                       "<td>" . countRoomOfType($row['id']) . "</td>" .
                       "<td>" . cutDescription($row['descriptionDK']) . "</td>".
                     "</tr>";
             }
     print "<tr>" .
             "<td>" .
               "<form action='overview.php' method='post'>" .
               userKey($user, $secretkey) .
               "<input type='text' name='newTypeNameDK' /></td>" .
             "<td>" .
               "<input type='submit' name='makeType' " .
               "value='Opret værelsestype'>" .
             "</td>" .
           "</form>" .
           "</tr>" .
           "</table>";
   ?>

  </body>
</html>
