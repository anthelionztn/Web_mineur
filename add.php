<?php 

header("Content-Type: text/plain");

$val1 = (isset($_GET["val1"])) ? $_GET["val1"] : NULL;
$val2 = (isset($_GET["val2"])) ? $_GET["val2"] : NULL;

if ($val1 && $val2) {
	echo $val1 + $val2; 
} else {
	echo "FAIL";
}

?>
