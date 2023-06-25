<?php
session_start();
$mail=$_SESSION['email'];
$name=$_SESSION['name'];
require_once "db.php";
if (isset($_POST['submit'])) {
    if (!empty($_POST['name1']) && ($_POST['name2']))
    {
        $usr=$mail;
        $na=$_POST['name1'];
        $sym=$_POST['name2'];
        $qua=$_POST['name3'];
        $pr=$_POST['name4'];
        $yr=$_POST['name5'];
        $tot=$qua*$pr;
        if(mysqli_query($conn,"insert into invsm values('$usr','$na','$sym','$qua','$pr','$yr','$tot')"));
        {
            echo "Success";
            header("refresh:2,url=add.php");
        }
    }
    if (!empty($_POST['name12']) && ($_POST['name22']))
    {
        $usr=$mail;
        // $id=$_POST['name62'];
        $nam=$_POST['name12'];
        $ra=$_POST['name22'];
        $ten=$_POST['name32'];
        $am=$_POST['name42'];
        $yr=$_POST['name52'];
        // $tst=4*(2023-$yr);
        // $testt=1+($ra/400);
        // $tstt=$testt**$tst;
        // $testi=$tstt*$am;
        $total=($am*((1+($ra/400))**(4*(2023-$yr))));
        // echo $tst,$testt,$tstt,$testi,$total;
        if(mysqli_query($conn,"insert into invfd values('$usr','$nam','$ra','$ten','$am','$yr','$total')"));
        {
            echo "Success";
            header("refresh:2,url=add.php");
        }
    }
    if (!empty($_POST['name13']) && ($_POST['name23']))
    {
        $usr=$mail;
        $na=$_POST['name13'];
        $sym=$_POST['name23'];
        $qua=$_POST['name33'];
        $pr=$_POST['name43'];
        $yr=$_POST['name53'];
        $tot=$qua*$pr;
        if(mysqli_query($conn,"insert into invmf values('$usr','$na','$sym','$qua','$pr','$yr','$tot')"));
        {
            echo "Success";
            header("refresh:2,url=add.php");
        }
    }
} 
   
?>