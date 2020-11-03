#!/bin/sh
DIRECTORY="/Users/myitedu/Downloads/www/newtasteofitaly/backups/newtasteofitaly.com/wp-content/uploads/"
cd $DIRECTORY
path="/Applications/XAMPP/xamppfiles/htdocs/myitedu"


download_images () {
  PATH=$1
  DIRECTORY=$2
  YEAR=$3
  MONTH=$4
  IMG=$5
  DESTINATION="$DIRECTORY$IMG"
  #https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/slider3.jpg



  FILE_PATH="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/$IMG"
  #echo $FILE_PATH

  #wget $FILE_PATH -O $DESTINATION -o $LOGFILE
  /usr/local/bin/wget $FILE_PATH -O $DESTINATION



}

mymonth () {
  PATH=$1
  DIRECTORY=$2
  YEAR=$3
  MONTH=$4

    for file in $MONTH/*; do
      filename="$DIRECTORY$file"

        if [ -f "$file" ]; then
         #echo "$filename"
         #echo $filename >> "$path/kudil_images.txt"
         download_images $PATH $DIRECTORY $YEAR $MONTH $file
        fi

      #echo $filename >> "$path/kudil_images.txt"
    done
}

myyear () {
  PATH=$1
  DIRECTORY=$2
  YEAR=$3
  for month in 01 02 03 04 05 06 07 08 09 10 11 12
  do
    FOLDER="$YEAR/$month"
    if [ -d "$FOLDER" ]; then
      mymonth $path $DIRECTORY $year $FOLDER
    fi
  done
}



for year in 2010 2011 2012 2013 2014 2015 2016 2017 2018 2019 2020
do
  if [  -d "$year" ];
  then
     myyear $path $DIRECTORY $year
  fi
done
