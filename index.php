<?php

$age = $_GET["age"];

if(isset($age)) {
	header("Strict-Transport-Security: max-age=".$age);
}

print_r($_GET);

echo "<h1>Born to be alive ^^</h1>";

