# CISC3140-LAB3.1 Preparing a repository for sharing
------

### Instruction：

##### **(To run this program, you should have \*wget\* installed in your device.)**

1. Clone the files in lab3.2 to your local device, go to the folder containing these files.(The *makefile* and *script.awk* file should be in the same folder/directory). 

   To clone and move to the folder containing the files, use:

   ```
    git clone https://github.com/Jiawei41/CISC3140-Lab3.git 
    cd CISC3140-Lab3/Lab3.1
   ```

2. Enter ***make*** to run the makefile, then you can see the data file(songs.csv) is downloading and the awk script is running to produce a report.

   ```
    make
   ```

3. If you want to delete the csv file, you can enter ***make clean*** . It will remove the *songs.csv* file.

   ```
    make clean
   ```

------

### About the data:

 The data is download from Data.World. Data.World is a data community, which is free and open to the public. The data is about New Musical Express the 100 best songs per decade from 1970 to 2010. The file has 4 columns containing rank, year, song title, and artist. Source Link : https://data.world/strleeeen/nme-best-songs-of-the-decade

------

### About the report:

The report will be displayed on the terminal, The code will not create a file to store the output data. The report will show the decade year and the song title of the artist named "The Killers"

---

### When you run this program, the output should look like this:
![run_make.png (2860×1230) (raw.githubusercontent.com)](https://raw.githubusercontent.com/Jiawei41/CISC3140-LargeScaleWeb/main/Lab3/3.1/img/run_make.png)

### If you use ***make clean***,it should look like this:
![make_clean.png (1334×284) (raw.githubusercontent.com)](https://raw.githubusercontent.com/Jiawei41/CISC3140-LargeScaleWeb/main/Lab3/3.1/img/make_clean.png)


---

#### Code

##### 1. This is the code in makefile: 

​		Use ***vim makefile*** to create and edit the makefile

```makefile
#run the script.awk file
output: songs.csv
        awk -f script.awk songs.csv
#Download the data
songs.csv:
        wget https://query.data.world/s/tmghhysnksqxyv437h7kwqdbdqil2k -O songs$
#Remove the songs.csv files
clean:
        rm songs.csv
```

##### 2. This is the code in script.awk:

​		Use ***vim script.awk*** to create and edit the script.awk file

```script.awk
#'FS'is field seperator, default is whitespace, here set it as ","
#'OFS' is output field seperator
#$n is nth field/column($0:every field, $1:first field, $2:second field...)
BEGIN {
	FS=",";
	OFS="\t\t";
}
{
	if ($4~"The Killers")
		print $2,$3,$4
}
```

