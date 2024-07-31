<?php 
$connect = mysqli_connect("localhost","root","","salon") or die("connection failed");

if($_POST['type'] == ""){
    $sql = "SELECT * FROM service";

    $query = mysqli_query($connect, $sql) or die("Query unsucessful");

    $str = "";

    while ($row = mysqli_fetch_assoc($query)) {
        $str .=                                                               "<option value={$row['cid']}>{$row['services']}</option>";
    }

    echo $str;


}
else if($_POST['type'] == "service"){

    $sql = "SELECT * FROM services WHERE cid = {$_POST['id']}";

    $query = mysqli_query($connect, $sql) or die("Query unsucessful");

    $str = "";

    while ($row = mysqli_fetch_assoc($query)) {
        $str .=                                                               "<option value={$row['cid']}>{$row['salonservice']}</option>";
    }

    echo $str;

}


?>