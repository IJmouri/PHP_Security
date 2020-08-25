<?php

$week = new DateTime('+1 week');
setcookie('user_id', '1', $week->getTimestamp(),'/', null, null, true);

?>