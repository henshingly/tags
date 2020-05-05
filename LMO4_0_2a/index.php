<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != '') {
  header("Location: https://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/lmo.php?".urldecode($_SERVER['QUERY_STRING']));
} else {
  header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/lmo.php?".urldecode($_SERVER['QUERY_STRING']));
}
exit;

?>