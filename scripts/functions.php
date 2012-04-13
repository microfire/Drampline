<?php

/*
 * All Functions for site
 */

function info() {
  phpinfo();
}

function main($r) {
  for ($n=0; $n<$r; $n++) {
    echo $n;
  }
}

function update_11() {
  die ('This is versioin 1.1');
}

?>
