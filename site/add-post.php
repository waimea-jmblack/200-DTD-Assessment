<?php 
require '_functions.php';

//Get form data
$priority = $_POST['priority'];
$vineyard = $_POST['vineyard'];
$row =      $_POST['row'];
$post =     $_POST['post'];

consoleLog($_POST);


//Connect to database
$db = connectToDB();

//Setup a queary to get all company info
$query = 'INSERT INTO tasks
            (priority, vineyard, `row`, post)
            VALUES (?,?,?,?)';
        
        

//Attempt to run the query
try {
    $stmt = $db->prepare($query);
    $stmt->execute([$priority, $vineyard, $row, $post]);
}
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB List Fetch',ERROR);
    die('There was an error inserting post into database');
}

header('location: index.php');


