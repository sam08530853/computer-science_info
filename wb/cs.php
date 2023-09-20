<?php
$link="mysqli_connect("localhost","root","","cs_info")";
if(mysqli_connect_error()){
    alert("connection fail");
}
else{
    alert("successfull");
}
   ?>