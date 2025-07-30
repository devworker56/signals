<?php
// Ultra-simple test that bypasses all restrictions
header('Content-Type: text/plain');
echo "SERVER WORKING!\n";
echo "Time: ".date('Y-m-d H:i:s')."\n";
echo "File: ".__FILE__."\n";