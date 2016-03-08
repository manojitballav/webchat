<?php
//setting up error report 
if (version_compare(phpversion(), "5.3.0", ">=")==1)
 error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
 error_reporting(E_ALL & ~E_NOTICE);

require_once('inc/login.inc.php');
require_once('inc/chat.inc.php');

//initialization of login system and code generation

$oSimpleLoginSystem = new SimpleLoginSystem();
$oSimpleChat = new SimpleChat();

//draw the login box
echo $oSimpleLoginSystem->getLoginBox();

//draw the chatbox application
$sChatResult = 'Need to Login';

//using cookies to check the login
if($_COOKIE['member_name'] && $_COOKIE['member_pass']) {
 if($$oSimpleLoginSystem->check_login($_COOKIE['member_name'],$_COOKIE['member_pass'])) {
$sChatResult = $oSimpleChat->acceptMessages();
}
}
echo $sChatResult;
?>
