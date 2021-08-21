#run the script.awk file
output: songs.csv
	awk -f script.awk songs.csv

#Download the data
songs.csv:
	wget https://query.data.world/s/tmghhysnksqxyv437h7kwqdbdqil2k -O songs.csv

#Remove the songs.csv files 
clean:
	rm songs.csv
