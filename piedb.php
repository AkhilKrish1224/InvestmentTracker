<?php
session_start();
$mail=$_SESSION['email'];
$name=$_SESSION['name'];
require_once "db.php";
$con = mysqli_connect("localhost","root","","my_db");
// $dq="SELECT symbol,quantity*price as total FROM `invsm` where email='$mail' group by symbol";
// $dq2="SELECT symbol,quantity*price as total FROM `invmf` where email='$mail' group by symbol";
// $dq1="SELECT name,Amount FROM `invfd` where email='$mail' group by name";
$dq="SELECT profit as total FROM `profitsm` where email='$mail' group by symbol";
$dq2="SELECT profit as total FROM `profitmf` where email='$mail' group by symbol";
$dq1="SELECT profit as total FROM `profitfd` where email='$mail' group by symbol";
// $query = "SELECT year,sum(total) from v1 group by year order by year";
// $qu_run = mysqli_query($con, $qu);
$dq_run = mysqli_query($con, $dq);
$dq_run1 = mysqli_query($con, $dq1);
$dq_run2 = mysqli_query($con, $dq2);
if(mysqli_num_rows($dq_run) != 0)
{
    // foreach($dq_run as $items)
    // {
    //     echo ",",$items['year'];
    // }
    // echo " ";
    // $prev=0;
    $sndd=0;
    foreach($dq_run as $items)
    {
        $sndd=$sndd+$items['total'];
        // echo ",",$snd;
        // $prev=$snd;
        //echo $items['year'];
    }
    echo ",",$sndd;
}
if(mysqli_num_rows($dq_run1) != 0)
{
    // foreach($dq_run as $items)
    // {
    //     echo ",",$items['year'];
    // }
    // echo " ";
    // $prev=0;
    $sndd=0;
    foreach($dq_run1 as $items)
    {
        $sndd=$sndd+$items['total'];
        // echo ",",$snd;
        // $prev=$snd;
        //echo $items['year'];
    }
    echo ",",$sndd;
}
if(mysqli_num_rows($dq_run2) != 0)
{
    // foreach($dq_run as $items)
    // {
    //     echo ",",$items['year'];
    // }
    // echo " ";
    // $prev=0;
    $sndd=0;
    foreach($dq_run2 as $items)
    {
        $sndd=$sndd+$items['total'];
        // echo ",",$snd;
        // $prev=$snd;
        //echo $items['year'];
    }
    echo ",",$sndd;
}
?>