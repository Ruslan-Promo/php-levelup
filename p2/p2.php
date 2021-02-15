<?php
if($argv){
  $text = isset($argv[1]) ? $argv[1] : '';
  $cut = isset($argv[2]) ? $argv[2] : '';
  $result = str_replace($cut, "", $text);
  echo $result.PHP_EOL;
}
?>