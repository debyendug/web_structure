<?php


//getting data from database

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'ajaxform2');

//getting data from the table

$relust = mysqli_query($con, "select * from ajaxinsert2");

//storing in an array

$data = array(0);

while($row = mysqli_fetch_assoc($relust))
{
    $data[] = $row;
}
 //returning respons to json format

 echo json_encode($data);
 


?>

 