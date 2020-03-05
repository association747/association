<?php
$myconnect = new mysqli("localhost", "root","1234","association");
/* check connection */
if ($myconnect->connect_errno) {
printf("Connect failed: %s\n", $myconnect->connect_error);
exit();
}
if(!$myconnect->set_charset("utf8")) {
printf("Error loading character set utf8: %s\n", $myconnectn->error);
exit();
}
?>





