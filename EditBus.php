<?php
include_once ('db_config.php');
require('Bus.php');

$id=$_POST['busID'];
$type=$_POST['busType'];
$desc=$_POST['description'];
$plates=$_POST['plates'];
$broken=$_POST['broken'];
$rent=$_POST['rent'];
$upload=$_POST['uploadTour'];

$sql = "SELECT ID_Bus FROM buses";
$result= mysqli_query($connection,$sql) or die(mysqli_error($connection));
if (mysqli_num_rows($result)>0) {
    while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        if ($record['ID_Driver']==$id){
            $idbus=$id;
            break;
        }
    }
}
if(isset($idbus)){
    $sql = "UPDATE buses SET busID=$idbus,`Type`='$type',Description='$desc',Plates='$plates',Broken=$broken,Reserved=$rent,Photo_Link_Bus='$upload'
            WHERE ID_Driver=$iddrv";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
}
else {
    $sql = "INSERT INTO buses 
            VALUES ($id,'$type','$desc','$plates',$broken,$rent,'$upload')";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
}