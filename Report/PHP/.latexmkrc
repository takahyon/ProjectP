#!/usr/bin/perl

add_cus_dep('tex', 'tex', 0, 'convert_jpnct');
sub convert_jpnct {
    system("find . -type f -name '*.tex' -print0 | xargs -0 sed -i '' -e 's/，/、/g' -e 's/．/。/g'");
}
