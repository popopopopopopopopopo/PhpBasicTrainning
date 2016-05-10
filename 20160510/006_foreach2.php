<?php
$a = ['A'=>11, 3=>2, 'Z'=>'Hello', 1=>'よーい', 2=>'どん!'];
var_dump($a);
echo "<br /><br />";
foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br />";
}
?>
