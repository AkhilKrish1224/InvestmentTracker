<?php
require_once "db.php";
if (isset($_GET['term'])) {
     
   $query = "SELECT * FROM mytable WHERE NAME_OF_COMPANY LIKE '{$_GET['term']}%' LIMIT 25";
   $query1 = "SELECT * FROM fd WHERE BANK LIKE '{$_GET['term']}%' LIMIT 25";
   $query2 = "SELECT * FROM mutualfund WHERE name LIKE '{$_GET['term']}%' LIMIT 25";
    $result = mysqli_query($conn, $query);
    $result1 = mysqli_query($conn, $query1);
    $result2 = mysqli_query($conn, $query2);
 
    if (mysqli_num_rows($result1) > 0) {
      while ($user = mysqli_fetch_array($result1)) {
       $res[] = $user['BANK'];
      }
     }
    if (mysqli_num_rows($result2) > 0) {
     while ($user = mysqli_fetch_array($result2)) {
      $res[] = $user['name'];
     }
    }
    if (mysqli_num_rows($result) > 0) {
      while ($user = mysqli_fetch_array($result)) {
       $res[] = $user['NAME_OF_COMPANY'];
      }
     }
    else {
      $res = array();
    }
    //return json res
    echo json_encode($res);

}
?>