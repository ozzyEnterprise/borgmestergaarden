<?php
function roomEditBox($title, $name, $description, $short) {
    include 'variables.php';
    if ($title == "DK") {
        $flag = 'danish.jpg';
    } else if ($title == "UK"){
        $flag = 'english.jpg';
    } else if ($title == "GR") {
        $flag = 'german.jpg';
    }
     print "<div class='editbox'>" .
           "<table><tr>" .
           "<td class='title'>Navn:</td>" .
           "<td><input type='text' name='newRoomName" .
           $title .
           "' value='" . $name . "' />" .
           "</td><td>" .
           "<img src='". $imagePath . $flag .
           "' height='70px' width='100px'>" .
           "</td></tr>" .
           "<tr>" .
           "<td class='title'>Kort beskrivelse:</td>" .
           "<td><input type='text' name='newShort" .
           $title .
           "' value='" . $short . "' />" .
           "</td></tr>" .
           "<tr>" .
           "<td class='title'>Beskrivelse:</td>" .
           "</tr>" .
           "<tr>" .
           "<th colspan='3'>" .
           "<textarea rows='10' cols='60' name='newRoomDescription" .
           $title .
           "'>" . $description . "</textarea>" .
           "</th></tr>" .
           "</table></div>";
}
?>