<?php
$x = true;
$x = !$x;       //反転する→FALSE
var_dump($x);
echo "<br />";

$y = false;
$y = !$y;       //反転する→TRUE
var_dump($y);

echo "<br /><br /><br />";
$a = 5;
if($a > 1){
    echo "大きい";
}else{
    echo "小さい";
}

?>
