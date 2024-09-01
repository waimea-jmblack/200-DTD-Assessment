<?php
require '_functions.php';

$id = $_GET['id'] ?? '';

//Connect to database
$db = connectToDB();

//Setup a queary to get all company info
$query = 'DELETE FROM tasks WHERE id = ?';

//Attempt to run the query
try {
    $stmt = $db->prepare($query);
    $stmt->execute([$id]); // Pass in the data
    
}
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Games Fetch',ERROR);
    die('There was an error getting the games from the database');

}


include 'partials/bottom.php'; 

header('location: index.php');