<?php
include_once ('db_config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<script src="DriverScript.js"></script>
<div id="BusDriver">
    <fieldset> <legend>Dodaj vozača</legend>
        ID: <input type="text" name="driverID"><br/>
        Ime: <input type="text" name="driverFName"><br/>
        Prezime: <input type="text" name="driverLName"><br/>
        Lozinka: <input type="password" name="password"><br/>
        Digitalni takograf
            <input type="radio" name="digitTach" value="1">ima
            <input type="radio" name="digitTach" value="0">nema<br/>
        <div id="area">Area of work
            <select>
                <option value="1">Gradski</option>
                <option value="2">Prigradski</option>
            </select></div>
        <div id="ownBus">Own bus
            <select>
                <?php
                echo '<option value="null">Nema</option>';
                $sql = "SELECT ID_Bus FROM buses";
                $result= mysqli_query($connection,$sql) or die(mysqli_error($connection));

                if (mysqli_num_rows($result)>0) {
                    while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo '<option value="' . $record['ID_Bus'] . '">' . $record['ID_Bus'] . '</option>';
                    }
                } ?>
            </select></div>
        Dodaj sliku vozača <input type="file" name="upload"><br/>
        <input type="button" value="dodaj" data-id="BusDriver">
    </fieldset>
</div>
<br/><div class="result"></div><br/><br/>
<table id="listdrivers" border="1" width="700">
    <tr>
        <td>ID</td>
        <td>Ime</td>
        <td>Prezime</td>
        <td>Digitalni tekograf</td>
        <td>Area of work</td>
        <td>Own bus</td>
        <td>Slika</td>
        <td>*edit</td>
        <td>*delete</td>
    </tr>
    <?php
    $sql = "SELECT * FROM drivers";
    $result= mysqli_query($connection,$sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0) {
        while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            if ($record['Digital_Tachograph']=1) $dig='Ima'; else $dig='Nema';
            echo '<tr><td>' . $record['ID_Driver'] . '</td><td>' . $record['First_Name'] . '</td>
            <td>' . $record['Last_Name'] . '</td><td>' . $dig . '</td><td>' . $record['Area'] . '</td>
            <td>' . $record['Bus_Own'] . '</td><td>' . $record['Photo_Link_Driver'] . '</td>
            <td>Edit</td><td>Delete</td></tr>';
        }
    }
    ?>
</table>


</body>
</html>