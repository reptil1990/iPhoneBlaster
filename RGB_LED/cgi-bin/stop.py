#!/usr/bin/env python

import os

stopb = "echo 0=0 > /dev/pi-blaster"
stopr = "echo 1=0 > /dev/pi-blaster"
stopg = "echo 2=0 > /dev/pi-blaster"

os.system(stopb)
os.system(stopr)
os.system(stopg)