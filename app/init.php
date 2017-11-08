<?php
require_once("classes/db.php");
require_once("classes/login.php");
require_once("classes/auth.php");
$system_name = "Primus Library";

if (!login::loggedin()) {
     require_once('login_again.php');
     exit();
}

if (isset($_POST['logoutbtn'])) {
     auth::logout();
     header('Location: '.$_SERVER['PHP_SELF']);
}

$loggedin = login::loggedin();

$loggedinUserID = DB::query('SELECT id FROM users WHERE id=:id', [':id'=>$loggedin]);
