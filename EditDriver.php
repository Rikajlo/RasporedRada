<?php
include_once ('db_config.php');
require('BusDriver.php');

$id=$_POST['driverID'];
$fname=$_POST['driverFName'];
$lname=$_POST['driverLName'];
$pass=$_POST['password'];
$digit=$_POST['digitTach'];
$area=$_POST['area'];
$own=$_POST['ownBus'];
$upload=$_POST['upload'];

$sql = "SELECT ID_Driver FROM drivers";
$result= mysqli_query($connection,$sql) or die(mysqli_error($connection));
if (mysqli_num_rows($result)>0) {
    while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        if ($record['ID_Driver']==$id){
            $iddrv=$id;
            break;
        }
    }
}
if(isset($iddrv)){
    $sql = "UPDATE drivers SET ID_Driver=$iddrv,First_Name='$fname',Last_Name='$lname',Password='$pass',Digital_Tachograph=$digit,Area='$area',Bus_Own=$own,Photo_Link_Driver='$upload'
            WHERE ID_Driver=$iddrv";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
}
else {
    $sql = "INSERT INTO drivers 
            VALUES ($id,'$fname','$lname','$pass',$digit,'$area',$own,'$upload')";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
}