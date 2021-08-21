#! /bin/bash

#get the csv file from https://query.data.world/s/74rphinujfr2ggov7jrzzyt3bnyggh
#use wget to download the csv file online and save it into "crime.csv"(using -O)
#wget -O crime.csv https://query.data.world/s/74rphinujfr2ggov7jrzzyt3bnyggh 


#1. print out the 5th field/column of first 30 rows 
head -n 30 crime.csv | awk -F "," '{print $5}' 



#2.print out produce a list of unique and sorted type of crime(2nd colum) happened  
awk -F "," 'NR>1  {print $2}' crime.csv | sort | uniq
