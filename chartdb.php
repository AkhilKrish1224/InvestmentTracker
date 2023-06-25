<?php
session_start();
$mail=$_SESSION['email'];
$name=$_SESSION['name'];
require_once "db.php";
$con = mysqli_connect("localhost","root","","my_db");
$qu="CREATE view v1 as SELECT * from invsm where email='$mail' union SELECT * from invmf where email='$mail' union SELECT * from invfd where email='$mail'";
$query = "SELECT year,sum(total) from v1 group by year order by year";
$qu_run = mysqli_query($con, $qu);
$query_run = mysqli_query($con, $query);

if(mysqli_num_rows($query_run) != 0)
{
    foreach($query_run as $items)
    {
        echo ",",$items['year'];
    }
    echo " ";
    $prev=0;
    foreach($query_run as $items)
    {
        $snd=$prev+$items['sum(total)'];
        echo ",",$snd;
        $prev=$snd;
        //echo $items['year'];
    }
}
$que="drop view v1";
$que_run = mysqli_query($con, $que);
?>