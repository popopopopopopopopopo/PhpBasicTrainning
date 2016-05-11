<?php   //参照渡しの引数
function piyo(&$a) {
  return ++$a;
}
$b = 1;

echo piyo($b) ."<br>";
echo $b ."<br>";
?>
