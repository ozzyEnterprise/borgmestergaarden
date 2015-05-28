<?php
function checkAndMakeType($post, $mode) {
    global $maxTypeNameLength;
    if ($post['newTypeNameDK'] == '') {
        $alert = 'Fejl!\nKan ikke oprette en type uden navn!';
        alert($alert);
        return false;
    }
    if (strlen($post['newTypeNameDK']) > $maxTypeNameLength) {
        $alert = 'Fejl!\nTypenavnet må ikke overstige ' .
               $maxTypeNameLength . ' tegn.';
        alert($alert);
        return false;
    }
    if (checkType($post['newTypeNameDK'])) {
        if ($mode == "edit" && $post['newTypeNameDK'] == $post['oldName']) {
        } else {
            $alert = 'Fejl!\nTypenavnet er allerede i brug!';
            alert($alert);
            return false;
        }
    }
    if ($mode == "make") {
    makeType($post);
    } else if ($mode == "edit") {
        updateType($post);
        $alert = 'Alle ændringer er gemt.';
        alert($alert);
    }
    return true;
}
?>