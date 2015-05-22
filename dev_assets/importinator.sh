#!/bin/bash
# Imports latest database, search and replace strings, clear cache

# Set some variables
if [ -z "$1" ]
  then
  #_file="trnn-latest.sql"
  _pathfile=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/trnn-latest.sql"
else
  #_file="$1"
  _pathfile="$1"
fi
bold=`tty -s && tput bold` ; normal=`tty -s && tput sgr0`
#_path=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )  # finds this script's cwd
_urlnew1=$(wp option get siteurl)  # grabs good siteurl before import. may have issues with multisite.
#_pathfile="$_path""/""$_file"

# got file?
if  [ -e "$_pathfile" ]
  then

  # Import database
  echo "${bold}Dropping${normal} tables.."
  wp db reset --yes
  echo "${bold}Importing${normal} $1 database..."
  wp db import "$_pathfile"
  _urlold1=$(wp option get siteurl)  # grabs bad siteurl from import

  # Search and replace strings
  echo "${bold}Replacing${normal} $_urlold1 with $_urlnew1 ..."
  wp search-replace --network "$_urlold1" "$_urlnew1" wp_options --skip-columns=guid # --network searches all sites in multisite
  # wp search-replace --url="$_urlnew2" "$_urlold2" "$_urlnew2"  # uncomment for multisite
  # or, wp db query method: wp db query --url="$_urlnew1" "UPDATE wp_options SET option_value = replace(option_value, '"$_urlold1"', '"$_urlnew1"') WHERE option_name = 'home' OR option_name = 'siteurl';
  # alt method 1 using mysql. Do we really need to worry about option_name? UPDATE wp_options SET option_value = replace(option_value, 'http://www.oldsiteurl.com', 'http://www.newsiteurl.com') WHERE option_name = 'home' OR option_name = 'siteurl';
  # alt method 2 using wp update: wp option update home "$_urlnew1" ; wp option update siteurl "$_urlnew1"

  # Flushes
  echo "${bold}Flushing${normal} rewrite and cache..."
  wp cache flush -url="$_urlnew1"
  wp rewrite flush   # -url="$_urlnew1"
  wp rewrite structure '/%category%/%title%/'  # -url="$_urlnew1"
  echo "${bold}Done.${normal}"

else
  echo "$_pathfile not found, exiting script."
fi
