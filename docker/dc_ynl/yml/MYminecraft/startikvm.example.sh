#!/bin/sh

#This script is required to start IKVM properly from within McMyAdmin.
#Adjust any paths to fit your configuration and set your new script
#(you must rename it!) as the IKVMpath setting in your McMyAdmin.conf

mono --optimize=shared IKVM/ikvm.exe $@