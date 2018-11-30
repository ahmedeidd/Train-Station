<?php
//create db trains
$csl="create database if not exists  train_station ";
$crea=new PDO('mysql:host=localhost','root','');
$crea->exec($csl);

//connect to db trains
$options=array(
PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'
);
$con=new PDO('mysql:host=localhost;dbname=train_station','root','',$options);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//create table timing

$sqtime="create table if not exists timing
(train_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,start_station VARCHAR(255),end_station VARCHAR(255),degree VARCHAR(255),duration VARCHAR(255),
speed VARCHAR(255),
start_time VARCHAR(255),end_time VARCHAR(255) character set utf8 

) ";
$con->exec($sqtime);

$sa="alter table timing convert to character set utf8  ";
$con->exec($sa);
