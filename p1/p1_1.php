<?php
// HTTP CODE
if($_REQUEST){
  header("HTTP/1.0 403 Forbidden");
}else{
  header("HTTP/1.0 500 Internal Server Error");  
}
