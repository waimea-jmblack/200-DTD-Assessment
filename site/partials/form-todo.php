<?php
    require '_functions.php';
    include 'partials/top.php';

    
?>

<h2>New Task</h2>

<form method="post" action ="add-task.php">

    <label>Priority</label>
    <input name="priority"
        type="int"
        placeholder="e.g. 2"
        maxlength="5"
        required>


    <label>Name</label>
    <input name="name" type="text" placeholder="e.g. Mojang" required>

    <label>Notes</label>
    <input name="notes" type="text" placeholder="e.g. A survival multiplayer" required>

    <input type="submit" value="Add">

</form>