<?php
$conn = mysqli_connect('localhost','root','','arda');
if(!$conn){
    die('Error'.mysqli_connect_erroe());
    
}