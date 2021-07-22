<?php

//$db = mysqli_connect('localhost','root','liam2001','appsalon');

$db = mysqli_connect('remotemysql.com','Ptc124KnSb','trBwIbIphI','Ptc124KnSb');
$db->set_charset('utf8');

if(!$db){
    echo 'error en la conexion';
    exit;
}
//echo 'conexion correcta';

