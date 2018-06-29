<?php
include_once "db_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dodaj</title>
</head>
<body>

Odaberi dan i tip turažnih listova.
<form method="post" action="">
    <input type="text" name="datum"/>
    <div>
        <select name="selectday">
            <option value="15">Radni dan</option>
            <option value="6">Subota</option>
            <option value="7">Nedelja</option>
        </select>
    </div>
    <div>
        <select name="selecttour">
            <option value="1">Radni dan - Obično</option>
            <option value="2">Radni dan - B turažni</option>
            <option value="3">Radni dan - C turažni</option>
            <option value="4">Subota</option>
            <option value="5">Nedelja</option>
        </select>
        <input type="submit" value="submit"/>
    </div>
</form>
    <?php

    $date=@$_POST['datum'];
    $selecttour=@$_POST['selecttype'];
    $selectday=@$_POST['selectday'];

    $thereis=0;
    $sql="SELECT * FROM Tours WHERE Type_Tour='$selecttour' and Type_Day='$selectday'";
    $result = mysqli_query($con,$sql) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
    $thereis=1;
    }  else {
        echo "0 results";
    };

    if($thereis){
        $sql="INSERT INTO workplan(ID_Tour,Date_Work,Start_Time,End_Time,Total_Time) VALUES SELECT ID_Tour, '$date', Start_Time, End_Time, Total_Time FROM tours 
WHERE Type_Tour='$selecttour' and Type_Day='$selectday';";
        $result = mysqli_query($con,$sql) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            echo "SUCCESS!";
        }
        else {
            echo "0 results";
        };
    }


    ?>





</body>
</html>