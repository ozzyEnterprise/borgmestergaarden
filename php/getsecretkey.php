<?php
function getSecretKey($user) {
    $sql = "SELECT " .
             "secretkey " .
           "FROM " .
             "users " .
           "WHERE " .
             "username = '".
             $user .
           "';";
    $result = runSql($sql);
    while ($row = $result->fetch_row()) {
        return $row[0];
    }
    return false;
}
?>