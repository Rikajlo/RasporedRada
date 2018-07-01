<?php include_once ('db_config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turazni listovi</title>
</head>
<body>

<form>
    <fieldset>
        <div>ID: <input type="text" name="tourID"></div>
        <div>Ime
            <select name="name">

            </select></div>
        <div>Opis: <input type="text" name="description"></div>
        <div>Početak: <input type="time" name="start"></div>
        <div>Kraj: <input type="time" name="finish"></div>
        <div>Ukupno vreme: <input type="time" name="time"></div>
        <div>Tip 2
            <select name="type2">

            </select></div>
        <div>Dodati sliku turažnog lista <input type="file" name="uploadTour"></div>
    </fieldset>
</form>
<br/><br/><br/>
<table id="tourlist" border="1" width="1000">
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