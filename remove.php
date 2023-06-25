<?php
session_start();
$mail=$_SESSION['admin'];
$name=$_SESSION['name'];
require_once "db.php";
if (isset($_POST['submit'])) {
    if (!empty($_POST['name1']) && ($_POST['name2']))
    {
        $usr=$mail;
        $email=$_POST['name2'];
        if(mysqli_query($conn,"delete from user where email='$email'"));
        {
            echo "Success";
            header("refresh:2,url=admin.php");
        }
    }
}