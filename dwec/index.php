<?php
$a = 4;
$b = &$a;
$a = 6;
echo $b;
?>