<?php

if(isset($_POST["iname"])){
var_dump($_POST);
    $username=$_POST['iname'];
    $password=$_POST['ename'];
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $dob=$_POST['dname'];



$users=array('username'=>$username,
             array('password'=>$password,'firstname'=>$firstname,'lastname'=>$lastname,'dob'=>$dob));
}         
?>