<?php

//connect to the sqlite3 database
$db = new SQLite3('example.db');

$gender = @$_GET["gender"]? $_GET["gender"]:"NULL";
$as2Language = @$_GET["english_2nd_language"]? $_GET["english_2nd_language"]:"NULL";
$data = array();

if ($gender!="NULL" || $as2Language!="NULL") {
    if ($gender!="NULL" && $as2Language=="NULL") {
        $records = $db -> query("SELECT * FROM students WHERE gender='$gender'");
    } elseif ($gender=="NULL" && $as2Language!="NULL") {
        $records = $db -> query("SELECT * FROM students WHERE english_2nd_language='$as2Language'");
    } elseif ($gender!="NULL" && $as2Language!="NULL") {
        $records = $db -> query("SELECT * FROM students WHERE english_2nd_language='$as2Language' and gender='$gender'");
    }
    while ($row = $records->fetchArray(SQLITE3_ASSOC)){
        array_push($data, $row);
    }
    echo json_encode($data);
}

if($gender=="NULL" && $as2Language=="NULL"){
    echo "You have not made a choice!! Please select atleast one chioce!!!!";
}