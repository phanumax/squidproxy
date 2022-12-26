#!/usr/bin/php
<?php

$temp = array();

while ( $input = fgets(STDIN) ) {
  // Split the output (space delimited) from squid into an array.
  $temp = split(' ', $input);

  // Set the URL from squid to a temporary holder.
  $output = $temp[0] . "\n";

  // Clean the Requesting IP Address field up.
  $ip = rtrim($temp[1], "/-");

  // Check the requesting IP Address.
  if ( $ip == "10.1.15.29" ) {
    // Check the URL and rewrite it if it matches foo.example.com
    if ( strpos($temp[0], "www.google.co.th") !== false ) {
      $output = "302:http://www.thaitv3.com/\n";
    }
  }

  echo $output;
}
