<?php 
include("connection.php");
if(!empty($_POST['key'])){
    $key=$_POST['key'];

    $fetch=mysqli_query($conn,"select * from data where name like '$key%'");
    while($arr=mysqli_fetch_assoc($fetch)){
        echo "<a href='$arr[url]' target='_blank'>$arr[name]</a><br>"; 
    }
}

?>