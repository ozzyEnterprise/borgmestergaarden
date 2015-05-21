<?php
function deletePicture($post) {
    foreach ($post as $key => $value) {
        if ($value == "slet") {
            $newkey = str_replace("_", ".", $key);
            if (file_exists($newkey)) {
                if (unlink($newkey)) {
                } else {
                    print "FILE NOT DELETED!!";
                }
            }
        }
    }
    return true;
}
?>