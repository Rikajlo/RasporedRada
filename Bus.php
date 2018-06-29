<?php include "db_config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bus</title>
</head>
<body>

<form>
    <fieldset>
        <div>ID: <input type="text" id="busID"></div>
        <div>Tip
            <select id="busType">

            </select></div>
        <div>Opis: <input type="text" id="description"></div>
        <div>Registarske tablice: <input type="text" id="plates"></div>
        <div>U kvaru:
            <input type="radio" name="broken" value="yes">da
            <input type="radio" name="broken" value="no">ne</div>
        <div>Za iznajmljivanje:
            <input type="radio" name="rent" value="yes">da
            <input type="radio" name="digitTach" value="no">ne</div>
        <div>Upload tour list photo <input type="file" id="uploadTour"></div>
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
</table>


</body>
</html>