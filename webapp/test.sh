#!/bin/bash

snort -A console -q -u snort -g snort -c /etc/snort/snort.conf -i eth0 >> test.txt
