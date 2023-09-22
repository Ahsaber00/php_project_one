<?php



function checkRequestMethod($method)
{
    if($_SERVER['REQUEST_METHOD']=="$method")
    {
        return true;
    }
    else
    {
        return false;
    }
}

function checkFormInput($input)
{
    
    if(isset($_POST[$input]))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function santhizeInput($input)
{
    $input=trim($input);
    $input=htmlspecialchars($input);
    $input=htmlentities($input);
    $input=stripslashes($input);
    return $input;
}

function emailval($input)
{
    if(!filter_var($input,FILTER_VALIDATE_EMAIL))
    {
        return false;
    }
    else
    {
        return true;
    }
}

function reDirect($location)
{
    header("location:$location");
    die;
}

?>