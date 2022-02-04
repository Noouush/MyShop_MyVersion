<?php 

/* CHECK SI LE PSEUDO EST UTILISÉ */

function check_username($username) {
    $bdd = connect_bdd();
    $check = $bdd->prepare("SELECT username FROM users WHERE username = ?");
    $check->execute([$username]);
    $exist_or_no = $check->fetch();

    if ($exist_or_no == TRUE){
        return TRUE;
    }
    else {
        return FALSE;
    }
}

/* CHECK SI L'EMAIL EST UTILISÉ */

function check_email($email) {
    $bdd = connect_bdd();
    $check = $bdd->prepare("SELECT email FROM users WHERE email = ?");
    $check->execute([$email]);
    $exist_or_no = $check->fetch();

    if ($exist_or_no == TRUE){
        return TRUE;
    }
    else {
        return FALSE;
    }
}



?>