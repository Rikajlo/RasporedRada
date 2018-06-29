<?php include "db_config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
s
<form>
    <fieldset>
        <div>ID: <input type="text" id="driverID"></div>
        <div>Ime: <input type="text" id="driverLName"></div>
        <div>Prezime: <input type="text" id="driverFName"></div>
        <div>Digitalni takograf
            <input type="radio" name="digitTach" value="yes">ima
            <input type="radio" name="digitTach" value="no">nema</div>
        <div>Area of work
            <select id="AoW">

            </select></div>
        <div>Own bus
            <select id="ownBus">

            </select></div>
        <div>Dodaj sliku vozača <input type="file" id="upload"></div>
    </fieldset>
</form>
<br/><br/><br/>
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
</table>


</body>
</html>