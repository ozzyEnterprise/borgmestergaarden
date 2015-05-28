<?php
function checkAndMakeRoom($post, $mode) {
    global $maxRoomNameLength, $maxRoomShortLength, $maxRoomDescriptionLength;
    if ($post['newRoomNameDK'] == '') {
        $alert = 'Fejl!\nKan ikke oprette et værelse uden navn!';
        alert($alert);
        return false;
    }
    if (strlen($post['newRoomNameDK']) > $maxRoomNameLength) {
        $alert = 'Fejl!\nVærelsesnavnet må ikke overstige ' .
               $maxRoomNameLength . ' tegn.';
        alert($alert);
        return false;
    }
    if (checkRoom($post['newRoomNameDK'])) {
        if ($mode == "edit" && $post['newRoomNameDK'] == $post['oldName']) {
        } else {
            $alert = 'Fejl!\nVærelsesnavnet er allerede i brug!';
            alert($alert);
            return false;
        }
    }
    if ($mode == "edit") {
        if ($maxRoomShortLength < strlen($post['newShortDK']) ||
           $maxRoomShortLength < strlen($post['newShortUK']) ||
           $maxRoomShortLength < strlen($post['newShortGR'])) {
               $alert = 'Fejl!\nDen korte beskrivelse må ikke være mere end ' .
                        $maxRoomShortLength . ' tegn land.';
               alert($alert);
               return false;
           }
        if ($maxRoomDescriptionLength < strlen($post['newRoomDescriptionDK']) ||
           $maxRoomDescriptionLength < strlen($post['newRoomDescriptionUK']) ||
           $maxRoomDescriptionLength < strlen($post['newRoomDescriptionGR'])) {
               $alert = 'Fejl!\nBeskrivelse må ikke være mere end ' .
                        $maxRoomDescriptionLength . ' tegn land.';
               alert($alert);
               return false;
           }
    }
    if ($mode == "edit") {
        updateRoom($post);
        $alert = 'Alle ændringer er gemt.';
        alert($alert);
    } else if ($mode == "make")
    {
        makeroom($post);
    }
    return true;
}
?>