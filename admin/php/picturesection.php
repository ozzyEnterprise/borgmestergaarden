<?php
function pictureSection($id, $user, $secretkey) {
    include 'variables.php';
    $path = $imagePath . "roompics/" . $id . "/";
    $findPictures = "*.{jpg,png,gif}";
    $piclist = glob($path . $findPictures, GLOB_BRACE);
    print "<div class='editbox'>";
    print "<table>" .
            "<tr>";
    foreach ($piclist as $picture) {
        print "<td><center>" .
                "<img src='" . $picture . "' / height='200px' width='200px'>" .
                "<br /><br />" .
                "<form action='room.php' method='post'>" .
                userKey($user, $secretkey) .
                "<input type='hidden' name='room' value='" . $id . "'>" .
                "<input type='hidden' name='deletePicture'>" .
                "<input type='submit' name='" . $picture . "' value='slet' " .
                "class='cancel' />" .
                "</form>" .
              "</center></td>";
    }
    print   "</tr>" .
          "</table>";

    print "</div>";
}
?>