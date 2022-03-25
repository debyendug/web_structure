<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'ajaxform2');


extract($_POST);




if(isset($_POST['submit']))
{
    
    $query = " insert into ajaxinsert2 (name, phno, email, gender, textarea) values ('$name','$phno','$email','$gender', '$textarea')";

    
    $q = mysqli_query($con, $query);
    header('location:show_records.html');
}


?>
