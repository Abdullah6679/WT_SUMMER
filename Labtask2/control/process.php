<?php
$name=$_REQUEST["firstname"];
if(empty($name)){
    echo"<br>Your first name should not be empty";
}
else if(strlen($name)<4)
{
    echo "<br>First name should be more than 4 characters";
}
else{
    echo"<br>Your first name is ".$name;
}
$name2=$_REQUEST["lastname"];
if(strlen($name2)<4)
if(empty($name2)){
    echo"<br>Your last name should not be empty";
}
else if(strlen($name2)<4)
{
    echo "<br>Last name should be more than 4 characters";
}
else{
    echo"<br>Your Last name is ".$name2;
}

if(isset($_REQUEST["des"]))
{
    $des=$_REQUEST["des"];
    echo "<br>Your designation is ".$des;
}
else{
    echo "<br>You must select designation";
}

if(isset($_REQUEST["pref"]))
{
    $pref=$_REQUEST["pref"];
    echo "<br>Your designation is ".$pref;
}
else{
    echo "<br>You must select designation";
}


if(empty($_REQUEST["male"])){
    echo "<br>Email should not be empty";
}
else{
    echo "<br>Your email is :".$_REQUEST["male"];
}

if(is_numeric($_REQUEST["password"])<2){
    echo "<br>Your password is valid";
}
else{
    echo "<br>Your password must contain 1 numerical value";
}


?>