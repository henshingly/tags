<?php
$scheme = isset($_SERVER['HTTPS']) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
header("Location: ".$scheme."://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/lmo.php?".urldecode($_SERVER['QUERY_STRING']));
exit;