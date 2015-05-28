<?php
function lookupUserPassword($user, $password) {
    $sql = "SELECT * " .
           "FROM " .
             "users " .
           "WHERE " .
             "username='" .
             $user .
           "' AND password=MD5('" .
             $password .
           "');";
    $result = runSql($sql);
    while ($row = $result->fetch_row()) {
        if ($row[0] == $user) {
            $sql = "UPDATE users SET secretkey=UUID() " .
                   "WHERE username = '" . $user . "';";
            runSql($sql);
            return true;
        }
    }
}
?>