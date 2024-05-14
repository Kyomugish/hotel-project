<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$Name= $_POST["Name"];
$Email= $_POST["Email"];
if($Name==="example_Name" && $Email==="example_Email"){
    echo"Booking successfull.welcome,". $Name."!";

}
else{
    echo"invalid username or password. please try again.";
}

}

?>

