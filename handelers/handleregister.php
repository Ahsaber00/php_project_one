<?php
session_start();
include "../core/functions.php";
include "../core/validations.php";
$errors=[];
$id=53537;
if(checkRequestMethod('POST'))
{

    foreach($_POST as $key => $value)
    {
        $$key=santhizeInput($value);
    }

    #validation of name min:3,max:25
    if(!requiredVal($name))
    {
        $errors[]= "The name is required";
    }
    else if(!minVal($name,3))
    { 
        $errors[]= "The name must be more than 3 characters";
    }
    else if(!maxVal($name,25))
    {
        $errors[]= "The name must be less than 25 characters";
    }

    #validation of password min:6,max:20
    if(!requiredVal($password))
    {
        $errors[]= "The password is required";
    }
    else if(!minVal($password,6))
    { 
        $errors[]= "The password must be more than 6 characters";
    }
    else if(!maxVal($password,20))
    {
        $errors[]= "The password must be less than 20 characters";
    }
    

    #validation of email
    if(!requiredVal($email))
    {
        $errors[]= "The email is required";
    }
    else if(!emailval($email))
    {
        $errors[]="The Email must be valid";
    }
}
else
{
    $errors[]= "not supported method";
}

if(empty($errors))
{
    $id+=1;
    $users_file=fopen("../data/users.csv",'a+');
    $user_data=[$name,$email,sha1($password),$id];
    fputcsv($users_file,$user_data);
    $_SESSION['auth']=[$name,$email,$id];
    reDirect("../index.php");
}
else
{
    $_SESSION['errors']=$errors;
    reDirect("../register.php");
    die;
}




