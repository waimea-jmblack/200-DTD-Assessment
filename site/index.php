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

<h3>Hi Dad, this is your website/app</h3>
<h3>This app can be used for your Weather, Soil acidity, Irrigation and keeping track of your Broken Posts</h3>


<h2>Simple Mobile-First Responsive Site</h2>

<p>This is a simple, responsive site that uses minimal CSS to achieve reasonable layout on both mobile and desktop devices...</p>

<section id="top">

    <main>
        <h2>Simple Mobile-First Responsive Site</h2>

        <p>This is a simple, responsive site that uses minimal CSS to achieve reasonable layout on both mobile and desktop devices...</p>

        <section>
            <article>
                <h3>Some Stuff</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Et netus et malesuada fames ac turpis egestas. Tellus at urna condimentum mattis pellentesque id nibh tortor. </p>
            </article>
       
        </section>

    </main>
<?php include 'partials/bottom.php';