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


<form method="post" action="">
    <input type="text" name="dateto" placeholder="Koji datum se pravi?"/>
    <input type="text" name="datefrom" placeholder="Od kojeg se kopira?"/>
        <input type="submit" value="submit"/>
</form>




<?php


$date=@$_POST['datum'];
$selectday=@$_POST['selectday'];
$selecttour=@$_POST['selecttour'];
$dateto=@$_POST['dateto'];
$datefrom=@$_POST['datefrom'];

var_dump($date);
var_dump($selectday);
var_dump($selecttour);



$thereis=0;
$thereisa=0;

    $sql="SELECT * FROM tours WHERE Type_Day=$selectday and Type_Tour=$selecttour;";
    $result = $connection->query($sql);
    if (@$result->num_rows > 0) {
// output data of each row
        while($row = $result->fetch_assoc()) {


            echo '<p>'.$row["ID_Tour"].' '.$row["Description"].' ';
            $thereis=1;
        }
    } else {
        echo "---";
    };

    if($thereis) {
        $sql = "INSERT INTO workplan(ID_Tour,Date_Work,Start_Time,End_Time,Total_Time) SELECT ID_Tour, '$date', Start_Time, End_Time, Total_Time FROM tours 
WHERE Type_Tour=$selecttour and Type_Day=$selectday";
        $result = $connection->query($sql);
    }
    /*
$thereisfrom=0;

$sql="SELECT * FROM workplan WHERE Date_Work=$datefrom";
$result = $connection->query($sql);
if (@$result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {


        echo '<p>'.$row["ID_Tour"].' '.$row["Date_Work"].' ';
        $thereisfrom=1;
    }
} else {
    echo "---";
};

$sql="SELECT * FROM workplan WHERE Date_Work=$dateto";
$result = $connection->query($sql);
if (@$result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        $thereisto=1;
    }
} else {
    $thereisto=0;
};

if(!($thereisto)) {
if($thereisfrom) {*/
    $sql = "INSERT INTO workplan(ID_Tour,ID_Driver,ID_Bus1,Date_Work,Start_Time,End_Time,Total_Time) SELECT ID_Tour, ID_Driver, ID_Bus1, '$dateto', Start_Time, End_Time, Total_Time FROM workplan
WHERE Date_Work='$datefrom'";
    $result = $connection->query($sql);
/*}
}*/

    ?>








</body>
</html>