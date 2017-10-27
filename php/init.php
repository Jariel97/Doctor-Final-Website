<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE contact";
if(mysqli_query($link, $sql)){
 } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$sql = "CREATE TABLE `contact`.`online_cons` ( `name` TEXT NOT NULL , `address` TEXT NOT NULL , `gender` TEXT NOT NULL,`mob` BIGINT NOT NULL , `email` TEXT NOT NULL , `age` INT NOT NULL , `date` DATE NOT NULL , `time` TEXT NOT NULL , `serial` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`serial`)) ENGINE = InnoDB;";
if(mysqli_query($link, $sql)){
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$sql1="CREATE TABLE `contact`.`subscription` ( `name` TEXT NOT NULL , `email` TEXT NOT NULL , `serial` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`serial`)) ENGINE = InnoDB;";
if(mysqli_query($link, $sql1)){
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);
?>