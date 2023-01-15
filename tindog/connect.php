<?php

$con=new mysqli('localhost', 'root', '', 'tindog');

if(!$con){
    die(mysqli_error($con));
}

?> 