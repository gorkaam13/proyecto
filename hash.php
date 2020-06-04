<?php

$pass = 'p2';
$hash = password_hash($pass, PASSWORD_DEFAULT);
//echo $hash;

//$hash = '$2y$10$HRnWu0Br0teJdknFBvFRHuhcVym2yfl7CoTaZQ.gGphuBb05PbK3S';
echo $hash . "<br>";