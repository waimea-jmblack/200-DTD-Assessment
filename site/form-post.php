<!DOCTYPE html>
<html lang="en"  data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.fluid.classless.green.min.css"
    />
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Vineyard Management Site</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>

    </header>
            
    <main>

<?php
    require '_functions.php';
   

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

<form method="post" action="add-post.php">

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
    <input name="post" type="text" placeholder="e.g. 12" required>


    <input type="submit" value="Add">

</form>



