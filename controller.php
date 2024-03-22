<?php

require_once ('database.php');

session_start();

/* print_r($_REQUEST); */

$regexemail = '/^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])?$/m';
preg_match_all($regexemail, htmlspecialchars($_REQUEST['email']), $matchesEmail, PREG_SET_ORDER, 0);
$email = $matchesEmail ? htmlspecialchars($_REQUEST['email']) : exit();
echo $email;

$pass = htmlspecialchars($_REQUEST['password']);
echo $pass;

$sql = "SELECT * FROM users WHERE email = '$email'";
$res = $mysqli->query($sql);

if ($row = $res->fetch_assoc()) {
    if ($pass == $row['password']) {
        $_SESSION['userLogin'] = $row;
        session_write_close();
        header('Location: index.php');
        exit;
    } 
}

$_SESSION['error'] = 'Email e password errati';
header('Location: login.php');
exit;
?>