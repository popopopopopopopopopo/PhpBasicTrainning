<?php    //通常の引数
function hoge($a) {
  return ++$a;
}
$b = 1;

echo hoge($b) ."<br>";  //hogeに$bを入れるので、$aに1が入り、++$aなので$a=2になる
echo $b ."<br>";
?>
