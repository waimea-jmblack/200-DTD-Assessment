<?php
    require '_functions.php';
    include 'partials/top.php'; 

    //Connect to database
    $db = connectToDB();

    //Setup a queary to get all todo list info
    $query = 'SELECT * FROM vineyards';

    //Attempt to run the query
    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
        $vineyards = $stmt->fetchAll();
    }
    catch (PDOException $e) {
        consoleLog($e->getMessage(), 'DB vineyard Fetch',ERROR);
        die('There was an error getting vineyard data from the database');
    }
?>

<h1>Broken Post Sighting</h1>

<form method="post" action="add-post">

<label>Priority</label>
    <input name="priority"
        type="int"
        placeholder="e.g 1-5"
        maxlength=1"
        required>


    <label>Vineyard</label>
    <select name="vineyard"required>

<?php
    foreach ($vineyards as $vineyard) {
        echo '<option value="' . $vineyard['id'] . '">' . $vineyard['name'] . '</option>';
    }

?>
    </select>


    <label>Row</label>
    <input name="row" type="text" placeholder="e.g. 126" required>

    <label>Post</label>
    <input name="row" type="text" placeholder="e.g. 12" required>


    <input type="submit" value="Add">

</form>



