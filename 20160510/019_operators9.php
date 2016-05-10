<?php
$x = 6; // 数値
$y = "6"; // 文字列

// 条件分岐①
if( $x==$y ){       //数値？数字が等しいか
  echo "TRUE<br />";
} else {
  echo "FALSE<br />";
}
// 条件分岐②
if( $x===$y ){      //型も等しいか...数値、文字数なのでF...
  echo "TRUE<br />";
} else {
  echo "FALSE<br />";
}
?>
