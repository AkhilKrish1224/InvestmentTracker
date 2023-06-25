<?php
session_start();
$mail=$_SESSION['email'];
$name=$_SESSION['name'];
require_once "db.php";
if (isset($_POST['submit'])) {
    if (!empty($_POST['name1']) && ($_POST['name2']))
    {
        $usr=$mail;
        $sym=$_POST['name3'];
        if(mysqli_query($conn,"delete from invsm where email='$usr' and symbol='$sym'"));
        {
            echo "Success";
            header("refresh:2,url=delete.php");
        }
    }
}
if (isset($_POST['submit2'])) {
    if (!empty($_POST['name1']) && ($_POST['name2']))
    {
        $usr=$mail;
        $sym=$_POST['name3'];
        if(mysqli_query($conn,"delete from invmf where email='$usr' and symbol='$sym'"));
        {
            echo "Success";
            header("refresh:2,url=delete.php");
        }
    }
}
if (isset($_POST['submit1'])) {
    if (!empty($_POST['name1']) && ($_POST['name2']))
    {
        $usr=$mail;
        $sym=$_POST['name1'];
        if(mysqli_query($conn,"delete from invfd where email='$usr' and Name='$sym'"));
        {
            echo "Success";
            header("refresh:2,url=delete.php");
        }
    }
}