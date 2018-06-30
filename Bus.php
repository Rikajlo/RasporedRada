<?php include_once "db_config.php"; ?>
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
                <option value="GRADSKI SOLO">Gradski solo</option>
                <option value="GRADSKI ZGLOBNI">Gradski zglobni</option>
                <option value="GRADSKI MINI">Gradski mini</option>
                <option value="PRIGRADSKI">Prigradski</option>
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
<table id="bus" border="1" width="900">
    <tr>
        <td>ID</td>
        <td>Tip</td>
        <td>Opis</td>
        <td>Tablice</td>
        <td>U kvaru</td>
        <td>Rezervisan</td>
        <td>Slika</td>
        <td>*edit</td>
        <td>*delete</td>
    </tr>
    <?php
    $sql = "SELECT * FROM buses";
    $result= mysqli_query($connection,$sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0) {
        while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            if ($record['Broken']=1) $broken='Jeste'; else $broken='Nije';
            if ($record['Reserved']=1) $res='Jeste'; else $res='Nije';
            echo '<tr><td>' . $record['ID_Bus'] . '</td><td>' . $record['Type'] . '</td>
            <td>' . $record['Description'] . '</td><td>' . $record['Plates'] . '</td><td>' . $broken . '</td><td>' . $res . '</td>
            <td>' . $record['Photo_Link_Bus'] . '</td>
            <td>Edit</td><td>Delete</td></tr>';
        }
    }
    ?>
</table>


</body>
</html>