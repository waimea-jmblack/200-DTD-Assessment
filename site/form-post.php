<?php
    require '_functions.php';
    include 'partials/top.php'; 
?>

<h1>Broken Post Sighting</h1>

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
    <input name="priority"
        type="int"
        placeholder="e.g 1-5"
        maxlength=1"
        required>


    <input type="submit" value="Add">

</form>



