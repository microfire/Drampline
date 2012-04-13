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

?>
