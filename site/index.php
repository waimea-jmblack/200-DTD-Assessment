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


<h1>Simple Mobile-First Responsive Site</h1>

<p>This is a simple, responsive site that uses minimal CSS to achieve reasonable layout on both mobile and desktop devices...</p>

<section id="top">

    <main>
        <h1>Simple Mobile-First Responsive Site</h1>

        <p>This is a simple, responsive site that uses minimal CSS to achieve reasonable layout on both mobile and desktop devices...</p>

        <section>
            <article>
                <h2>Some Stuff</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Et netus et malesuada fames ac turpis egestas. Tellus at urna condimentum mattis pellentesque id nibh tortor. </p>
            </article>
       
        </section>

    </main>
<?php include 'partials/bottom.php';