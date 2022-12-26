#! /usr/bin/perl
# enable buffer autoflush
$|=1;
# read from standard input
while (<STDIN>) { 
        # perform string substitution:
        # replace rmays.hants.sch.uk with 123.456.789.123
        s@http://rmays.hants.sch.uk@http://123.456.789.123@; 
        # print result to standard output
        print STDOUT; 
}
