<?php
$server="127.0.0.1";
$user="root";
$pass="";
$dbname="project2";
$conn=mysqli_connect($server,$user,$pass,$dbname);

//check connection

if(!$conn)
{
    die("connection failed." .mysqli_connect_error());
}
/*if(!mysqli_select_db($conn,'project2'))
    {
        echo 'databse not connected';
    }
else
{
    echo "Connected";

}
*/




?>

