<?php
    require '_functions.php';
    include 'partials/top.php'; 
?>

<h2>Broken Post Sighting</h2>

<form>

    <label>Vineyard</label>
    <input name="forename"
        type="text"
        placeholder="e.g. Home"
        minlength="3"
        maxlength="20"
        required>


    <label>Row</label>
    <input name="row" type="text" placeholder="e.g. 123" required>

    <label>Priority</label>
    <input name="salary" type="text" placeholder="e.g. 150000" required>

    <input type="submit" value="Add">

</form>



