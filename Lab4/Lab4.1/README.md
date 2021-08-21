## Description of the table schema

- In the database named example.db, there is a table named "students", which is imported from a CSV file named "students.csv".

- The schema of this table:

  ```sqlite
  CREATE TABLE students(
    "id" TEXT,
    "first_name" TEXT,
    "last_name" TEXT,
    "ethnicity" TEXT,
    "gender" TEXT,
    "hs_gpa" TEXT,
    "english_2nd_language" TEXT
  );
  
  ```

  - The table has 7 columns which are "id", ""first_name",  "last_name" "ethnicity", "gender", "hs_gpa", and  "english_2nd_language". Their data types are all text(string value).

- To import datas from the students.csv to a table of the example.db

  ```sqlite
  sqlite3 example.db
  .mode csv   --set the mode to CSV format(match the songs.csv format).
  .import students.csv students
  ```

---

---

# SQLite3

- ### Datatypes

  | Datatype | Description                                                  |
  | -------- | ------------------------------------------------------------ |
  | integer  | int value; signed integer                                    |
  | text     | string value                                                 |
  | null     | null value                                                   |
  | real     | floating point value                                         |
  | blob     | binary large object; store binary files, such as image, audio. |

- ### Create database and table

  ```sqlite
  --create a database
  sqlite3 filename    --ex: sqlite3 example.db
  
  --Anothet way to create database
  sqlite3             --Access sqlite3 
  .open filename      --open the database, or create a database if the file is not existed yet.
  
  --create a database table
  create table tablename(columnName1 datatype, columnName3 datatype,...);
  ```

- ### Insert Record

  - Add a record to a table

  ```sqlite
  --Insert whole record
  insert into tablename values (value1, value2, ...); --()should contain every value in the table
  --Insert part of record
  insert into tablename (columnName1,columnName2,...) values (value1,value2,...);
  ```

- ### Delete Record

  - Will delete every record that satisfy the condition in the table.

  ```sqlite
  delete from tableName where condition
  ```

- ### Update 

  - Will update/modify every record that satisfy the condition in the table.

  ```sqlite
  --Modify the existing records in a table
  update tableName set column1=value1,column2=value2,... where condition;
  ```

- ### Alter 

  - Used to add, modify, or drop/delete columns in a table, and also can used to rename a table.

  ```sqlite
  --Add culomn
  alter table tableName add culomnName datatype;
  --Rename table
  alter table old_tableName rename to new_tableName;
  ```

- ### Drop table

  - Remove a table definition and all associated data
  
  ```sqlite
  drop table tableName;
  ```

- ### Select

  - Used to get data from database table and return the data in the form of result table.  

  ```sqlite
  select column1,column2,... from tableName
  ```

- ### Importing from csv

  - If the table does not exist yet, it will create the table. The first row of the CSV file will be the names of the columns of the table. The remaining rows of the CSV file will be the actual data to be imported into the table.
  - If the table already exists, all the rows in the CSV file, including the first row, will be the actual data to be imported into the table.

  ```sqlite
  .mode csv
  .import fileName.csv tableName
  ```

  

### Some SQLite commands

- ##### Note: No whitespace between <span style="background-color:#ffe6e6; color:#cc0000">sqlite></span>  and <span style="background-color:#ffe6e6; color:#cc0000"> . </span> 

```sqlite
--check if sqlite3 is installed 
which sqlite3
--To see usage hints
.help
--Display the existing databases
.databases
--Display the current value of various settings 
.show
--show the complete schema for the database
.schema
--show the compete schema for a single table
.schema tableName
--list the tables in the database
.table
--Turn the display of the title/culomnName on or off 
.headers on
.headers off
--Set output format. The default output mode is "list"
.mode [MODE]
--Set column widths for "column" mode
.width num1 num2 ...     
-- Two ways to exit salite3
.quit
.exit
```

---

---

