<?php 
//Collect POST values 
$name= $_POST['user_name']; 
$rollno = $_POST['user_rollno']; 
$discipline= $_POST['user_discipline']; 
$batch = $_POST['user_batch'];

//Connect to mysql server 
$link = mysql_connect('dbms.iiitdmj.ac.in', '2016013','54d2d108'); 
//Check link to the mysql server 
if(!$link) { 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('2016013'); 
if(!$db) { 
die("Unable to select database"); 
} 
//Create query (if you have a Logins table the you can select login id and password from there)
$qry="INSERT INTO Student(Name,RollNo,Discipline,Batch) VALUES ('$name','$rollno','$discipline','$batch')";
$results=mysql_query($qry)or die(mysql_error());
echo"Data entered successfully!";

$query="INSERT INTO HasMember(CName,RollNo,Name) VALUES ('Jazbaat','$rollno','$name')";
$results=mysql_query($query)or die(mysql_error());
echo"Data entered successfully!";

?>
