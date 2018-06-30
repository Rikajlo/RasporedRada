<?php include "db_config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bus</title>
</head>
<body>

<form method="post" action="EditBus.php">
    <fieldset>
        <div>ID: <input type="text" name="busID"></div>
        <div>Tip
            <select name="busType">

            </select></div>
        <div>Opis: <input type="text" name="description"></div>
        <div>Registarske tablice: <input type="text" name="plates"></div>
        <div>U kvaru:
            <input type="radio" name="broken" value="1">da
            <input type="radio" name="broken" value="0">ne</div>
        <div>Za iznajmljivanje:
            <input type="radio" name="rent" value="1">da
            <input type="radio" name="rent" value="0">ne</div>
        <div>Upload tour list photo <input type="file" name="uploadTour"></div>
        <input type="submit" value="dodaj">
    </fieldset>
</form>
<br/><br/><br/>
<table id="bus" border="1" width="700">
    <tr>
        <td>ID</td>
        <td>Tip</td>
        <td>Opis</td>
        <td>Tablice</td>
        <td>U kvaru</td>
        <td>Za iznajmljivanje</td>
        <td>Slika</td>
        <td>*edit</td>
        <td>*delete</td>
    </tr>
    <?php
    $sql = "SELECT * FROM buses";
    $result= mysqli_query($connection,$sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0) {
        while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            if ($record['Digital_Tachograph']=1) $dig='Ima'; else $dig='Nema';
            echo '<tr><td>' . $record['ID_Bus'] . '</td><td>' . $record['Type'] . '</td>
            <td>' . $record['Description'] . '</td><td>' . $dig . '</td><td>' . $record['Area'] . '</td>
            <td>' . $record['Bus_Own'] . '</td><td>' . $record['Photo_Link_Driver'] . '</td>
            <td>Edit</a></td><td>Delete</td></tr>';
        }
    }
    ?>
</table>


</body>
</html>