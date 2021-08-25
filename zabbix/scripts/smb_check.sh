#!/bin/bash
SMBSERVER=$1
SMBUSER=$2
SMBPASS=$3
SMBSHARE=$4

echo $SMBPASS|smbclient //$SMBSERVER/$SMBSHARE -c "pwd" -q -U $SMBUSER >/dev/null 2>/dev/null
echo $?
