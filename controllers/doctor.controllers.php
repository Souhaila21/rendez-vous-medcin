<?php
extract($_POST);
if(strlen($name)>0){
    if(intval($day)>0){
        setcookie("doctorName",$name, 0, "/");
        setcookie("days",$day, 0, "/");
        echo "WELL DONE";
    }else{
        echo "The number of days is not valid";
    }
}else{
    echo "Please fill the information required";
}
