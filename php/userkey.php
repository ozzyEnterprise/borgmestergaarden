<?php
function userKey($user, $secretkey) {
    return "<input type='hidden' name='user' value='" . $user . "'>" .
           "<input type='hidden' name='secretkey' value='" . $secretkey . "'>";
}
?>