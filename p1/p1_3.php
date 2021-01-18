<?php
if(!$_REQUEST){
  header( 'Location: http://dev.promo-z.ru/php-practice/p1_1.php', true, 301 );
  die();
}else{
  if(isset($_REQUEST['a'])){
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: http://dev.promo-z.ru/php-practice/p1_1.php');
    die();
  }
  if(isset($_REQUEST['b'])){
    header('Status: 301 Moved Permanently');
    header('Location: http://dev.promo-z.ru/php-practice/p1_1.php');
    die();
  }
}