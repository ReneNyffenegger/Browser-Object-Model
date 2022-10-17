<?php
  header('text/plain');
  $sleepSeconds = $_REQUEST['sleepSeconds'];
  sleep($sleepSeconds);
  print("I just woke up after <b>$sleepSeconds seconds</b>.");
?>
