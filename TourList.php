<?php include "db_config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turazni listovi</title>
</head>
<body>

<form>
    <fieldset>
        <div>ID: <input type="text" id="tourID"></div>
        <div>Tip
            <select id="type">

            </select></div>
        <div>Opis: <input type="text" id="description"></div>
        <div>Početak: <input type="text" id="start"></div>
        <div>Kraj: <input type="text" id="finish"></div>
        <div>Ukupno vreme: <input type="text" id="time"></div>
        <div>Tip 2
            <select id="type2">

            </select></div>
        <div>Dodati sliku turažnog lista <input type="file" id="uploadTour"></div>
    </fieldset>
</form>
<br/><br/><br/>
<table id="tourlist" border="1" width="700">
    <tr>
        <td>ID</td>
        <td>Tip</td>
        <td>Opis</td>
        <td>Početak</td>
        <td>Kraj</td>
        <td>Ukupno vreme</td>
        <td>Tip 2</td>
        <td>Slika</td>
        <td>*edit</td>
        <td>*delete</td>
    </tr>
</table>


</body>
</html>