<?php
  header ('Content-type: text/plain; charset=UTF-8');
  header ('Access-Control-Allow-Origin: *');
  header ('x-author: udachin');
?>

function task(x){
  return x * this * this;
}
