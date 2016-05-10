<?php
$a = array("にゃ<br>", "にゃにゃ<br>", "にゃにゃにゃ<br>", "にゃにゃにゃにゃ<br>");

foreach ( $a as $key => $value ) {
  echo $key . ' ' . $value;
}
$b = array(5=>'研修');
foreach ( $b as $key1 => $value1 ) {
  echo $key1 . ' ' . $value1;
}

?>
