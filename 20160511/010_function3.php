<?php function hoge( $a = "Hello"){
  $a .= ", World<br>";
  return $a;
}

echo hoge('shima');
//関数「hoge｣の引数「$a｣にデフォルト値を「shima」に指定
 ?>
