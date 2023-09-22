<?php
session_start();
include "../core/functions.php";
include "../core/validations.php";
$errors=[];
if(checkRequestMethod('POST'))
{
    foreach($_POST as $key => $value)
    {
        $$key=santhizeInput($value);
    }
    #validation of email
    if(!requiredVal($email))
    {
        $errors[]="Please enter the email";
    }
    #validation of password
    if(!requiredVal($password))
    {
        $errors[]="Please enter the password";
    }
    else if(!requiredVal($password) && !requiredVal($email) )
    {
        $errors[]="Please enter the email and the password";
    }
}
else
{
    $errors[]="Not supported method";
}
if(empty($errors))
{
    $password=sha1($password);
    $login_try_data=[$email,$password];
    $registerd_or_not=false;
    $csv = str_getcsv(file_get_contents('../data/users.csv'));
    $common[]=array_intersect($login_try_data,$csv);
    if(!empty($common))
    {
        $registerd_or_not=true;
    }
        
    if($registerd_or_not)
    {
        $_SESSION['auth']=[$email];

        reDirect("../index.php");
    }
    else if($registerd_or_not==false)
    {
        $errors="Wrong Email or password";
        reDirect("../login.php");
        

    } 

    }
else
{
    $_SESSION['errors']=$errors;
    reDirect("../login.php");


}

    
   





     


   
    



?>