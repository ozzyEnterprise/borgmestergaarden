<?php
function lookupUserSecretKey($user, $key) {
    $sql = "SELECT * " .
           "FROM " .
             "users " .
           "WHERE " .
             "username='" .
             $user .
           "' AND secretkey='" .
             $key .
           "';";
    $result = runSql($sql);
    while ($row = $result->fetch_row()) {
        if ($row[0] == $user) {
            return true;
        }
    }
    return false;
}
?>