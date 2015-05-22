#!/bin/bash
#
# Exports database with time stamp and overwrites latest database

_devpath=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
_uname="$USER"
_ushort="${_uname:0:4}"
#echo "Exporting database with user name $_ushort and current time stamp."
#wp db export "$_devpath"/trnn-"$_ushort"_$(date '+%m-%d_%H-%M').sql
echo "Exporting database to trnn-latest.sql, overwriting previous latest."
wp db export "$_devpath"/trnn-latest.sql
echo "Done."
