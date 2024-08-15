
<?php
require '_functions.php';

$id = $_GET['id'] ?? '';

// Connect to database
$db = connectToDB();

// Setup a query to update company info
$query = 'UPDATE tasks SET vineyard = ? WHERE vineyard = ?';

// Attempt to run the query
try {
    $stmt = $db->prepare($query);
    $stmt->execute([$id, $id]); // Pass in the data (assuming you're updating the vineyard field where the id matches)

    // Redirect after successful update
    header('Location: index.php');
    exit(); // Always good practice to call exit() after a header redirect

} catch (PDOException $e) {
    // Ensure consoleLog is defined and used correctly
    consoleLog($e->getMessage(), 'DB Update Error', ERROR);
    die('There was an error updating the database');
}

// Include this if needed, but remember to call header() before including files that produce output
include 'partials/bottom.php';
