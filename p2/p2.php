<?php
$stdin = fopen("php://stdin", "r+");
echo 'Type text: ';
$text = trim(fgets(STDIN));
echo 'What to cut: ';
$cut = trim(fgets(STDIN));
$result = str_replace($cut, "", $text);
echo 'Result: '.$result.PHP_EOL;
?>