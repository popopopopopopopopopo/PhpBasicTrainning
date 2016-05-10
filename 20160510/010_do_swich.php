<?php
$x = 1;
switch($x){
  case 1:       //$xの値が1の場合
    echo "値は1だね。";
    break;
  case 2:           //$x=2の場合、breakがないのでそのまま下に通過する
  case 3:
    echo "値は2か3だね。";
    break;
  default:      //$xの値は１でも２でも3でもない場合
    echo "1でも2でも3でもないね。";
}
?>
