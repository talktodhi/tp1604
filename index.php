<?php

$fp = fsockopen('127.0.0.1', 25, $errno, $errstr, 5);
if (!$fp) {
    // port is closed or blocked
	echo "Blocked";
} else {
    // port is open and available
	echo "Not Blocked";
    fclose($fp);
}