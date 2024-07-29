<?php 
require '_functions.php';

//Get form data
$priority =  $_POST['priority'];
$vineyard =  $_POST['vineyard'];
$row =       $_POST['row'];
$post =       $_POST['post'];

//Connect to database
$db = connectToDB();

//Setup a queary to get all company info
$query = 'INSERT INTO posts
            (priority, vineyard, row, post)
            VALUES (?,?,?,?)';
        
        

//Attempt to run the query
try {
    $stmt = $db->prepare($query);
    $stmt->execute([$priority, $vineyard, $row, $post]);
}
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB List Fetch',ERROR);
    die('There was an error getting data from the database');
}

header('location: index.php');

