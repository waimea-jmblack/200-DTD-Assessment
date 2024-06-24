<?php 

require '_functions.php';
include 'partials/top.php'; 

?>

<?php

//Connect to database
$db = connectToDB();

//Setup a queary to get all company info
$query = 'SELECT * FROM posts';

//Attempt to run the query
try {
    $stmt = $db->prepare($query);
    $stmt->execute();
    $posts = $stmt->fetchAll();
}
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB List Fetch',ERROR);
    die('There was an error getting data from the database');
}

consoleLog($posts);

?>

<h1>Hi Dad, this is your website/app</h1>
<h2>This app can be used for your Weather, Soil acidity, Irrigation and keeping track of your Broken Posts</h2>

<?php include 'partials/bottom.php';