#!/usr/bin/perl 
$|=1; 
while (<>) { 
    @X = split; 
    $url = $X[0]; 
    $ip = $X[1]; 
    if (1 == 1){ 
        print "302:http://10.1.0.223/squid/\n"; 
    } 
    else{ 
        print "$url\n"; 
    } 
} 

