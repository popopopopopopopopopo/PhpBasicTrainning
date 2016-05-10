<?php
$a = 4;
if( $a > 3 xor $a < 8 ) {       //$a>3ではなく、$a<8ではない値
  echo "TRUE\n";
} else {
  echo "FALSE\n";
}
?>
