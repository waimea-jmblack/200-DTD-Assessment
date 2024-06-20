<?php include 'partials/common-top.php'; ?>

<?php

//Connect to database
$db = connectToDB();

//Setup a queary to get all company info
$query = 'SELECT * FROM Broken Post Sighting';

//Attempt to run the query
try {
    $stmt = $db->prepare($query);
    $stmt->execute();
    $BrokenPostSighting = $stmt->fetchAll();
}
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB List Fetch',ERROR);
    die('There was an error getting data from the database');
}

consoleLog($BrokenPostSighting);

?>

<?php include 'partials/common-bottom.php';