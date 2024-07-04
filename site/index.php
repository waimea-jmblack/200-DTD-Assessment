<?php 

require '_functions.php';
include 'partials/top.php'; 

?>

<?php

//Connect to database
$db = connectToDB();

//Setup a queary to get all todo list info
$query = 'SELECT * FROM posts ORDER BY priority DESC';

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

<h2>Hi Dad, this is your website/app</h2>
<p>This app can be used for your Weather, Soil acidity, Irrigation and keeping track of your Broken Posts</p>


<h2>Simple Mobile-First Responsive Site</h2>

<p>This is a simple, responsive site that uses minimal CSS to achieve reasonable layout on both mobile and desktop devices...</p>


        <section>
            <article>
                <h3>Some Stuff</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Et netus et malesuada fames ac turpis egestas. Tellus at urna condimentum mattis pellentesque id nibh tortor. </p>
            </article>
        </section>

        <section>
            <article>
                <h3>Some Stuff</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Et netus et malesuada fames ac turpis egestas. Tellus at urna condimentum mattis pellentesque id nibh tortor. </p>
            </article>
        </section>

        <section>
            <article>
                <h3>Some Stuff</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Et netus et malesuada fames ac turpis egestas. Tellus at urna condimentum mattis pellentesque id nibh tortor. </p>
            </article>
        </section>



<h2>Weather</h2>

<?php

/***************************************************************************** */

foreach ($posts as $post) {
    echo '<li>';

    echo '<span class="priority p' . $post['priority'] . '">';
    echo    $post['priority'];
    echo '</span>';

    /*echo '<a class="name" href="view-task.php?id=' . $post['id'] . '">';
    echo    $post['name'];
    echo '</a>';*/


    echo '<a href= "delete-task.php?id=' . $post['id'] . '"
             onclick="return confirm(`Are you sure?`);">';
    echo    '🗑️';
    echo '</a>';



    if ($task['completed']) {
        echo   '<a class="done"
                    href="task-undone.php?id=' . $post['id'] . '">🗹</a>';
    }
    else{
        echo   '<a class="not-done"
                    href="task-done.php?id=' . $post['id'] . '">☐</a>';
    }

    echo '</li>';
}

/**************************************************************************** */

?>

    <div id="add-button">
        <a href="form-post.php">
            +
        </a>
    </div>

<?php include 'partials/bottom.php';