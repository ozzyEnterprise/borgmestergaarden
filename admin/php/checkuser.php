<?php
include 'booking.php';
if (isset($_POST['user']) && isset($_POST['password'])) {
    if (lookupUserPassword($_POST['user'], $_POST['password'])) {
        $_POST['secretkey'] = getSecretKey($_POST['user']);
    }
}

if (isset($_POST['secretkey']) && isset($_POST['user'])) {
    if (lookupUserSecretKey($_POST['user'] , $_POST['secretkey'])) {
        $user = $_POST['user'];
        $secretkey = $_POST['secretkey'];
    } else {
        header("Location: index.php");
        die();
    }
} else {
    header("Location: index.php");
    die();
}
?>