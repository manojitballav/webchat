<meta http-equiv="refresh" content = "5">
<?php
//populating the chat area
require_once('inc/chat.inc.php');
$oSimpleChat = new SimpleChat();
echo $oSimpleChat->getMessages();

?>
