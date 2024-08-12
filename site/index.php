<?php 

require '_functions.php';
include 'partials/top.php'; 

?>

<?php

//Connect to database
$db = connectToDB();

//Setup a queary to get all todo list info
$query = 'SELECT * FROM tasks WHERE completed=0 ORDER BY priority DESC';

//Attempt to run the query
try {
    $stmt = $db->prepare($query);
    $stmt->execute();
    $tasks = $stmt->fetchAll();
}
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB List Fetch',ERROR);
    die('There was an error getting data from the database');
}

consoleLog($tasks);

?>


        <section>
            <article>
                <h3>The Website</h3>
                <p>Hi Dad, this is your website/app. This app can be used for your Weather, Soil acidity, Irrigation and keeping track of your Broken Posts. 
                    I trust that this website/application will prove to be an invaluable resource for your daily vineyard operations. I am sincerely grateful for the opportunity to engage in a collaborative partnership with a respected colleague in the field of duty. 😋</p>
            </article>
             <article>
                <h3>Some Stuff</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Et netus et malesuada fames ac turpis egestas. Tellus at urna condimentum mattis pellentesque id nibh tortor. </p>
            </article>
             <article>
                <h3>Some Stuff</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Et netus et malesuada fames ac turpis egestas. Tellus at urna condimentum mattis pellentesque id nibh tortor. </p>
            </article>
        </section>





        <section id="weather">
    <h1>Weather Section</h1>

    <details>
        <summary>Weather Forecast from metservice.co.nz</summary>
        <iframe src="https://www.metservice.com/towns-cities/locations/blenheim" width="100%" height="500px" frameborder="0"></iframe>
    </details>

    <details>
        <summary>Weather Forecast from weatherwatch.co.nz</summary>
        <iframe src="https://www.weatherwatch.co.nz/forecasts/Blenheim" width="100%" height="500px" frameborder="0"></iframe>
    </details>

    <details>
        <summary>Weather Forecast from harvest.co.nz</summary>
        <iframe src="https://live.harvest.com/?sid=7880" width="100%" height="500px" frameborder="0"></iframe>
    </details>
</section>

    <h1>Posts</h1>

<?php             
    echo '<ul id="todo-list">';

    foreach ($tasks as $task) {
        echo '<li>';

        echo '<span class="priority p' . $task['priority'] . '">';
        echo    $task['priority'];
        echo    $task['vineyard'];
        echo    $task['row'];
        echo    $task['post'];
        
        echo '</span>';

        // Uncomment these lines if needed
        /*
        echo '<a class="name" href="view-task.php?id=' . $task['id'] . '">';
        echo    $task['name'];
        echo '</a>';
        */

        /*echo '<a href="delete-task.php?id=' . $task['id'] . '"
                    onclick="return confirm(`Are you sure?`);">';
        echo    '🗑️';
        echo '</a>';*/

        if ($task['completed']) {
            echo   '<a class="done"
                        href="task-undone.php?id=' . $task['id'] . '">🗹</a>';
        } else {
            echo   '<a class="not-done"
                        href="task-done.php?id=' . $task['id'] . '">☐</a>';
        }

        echo '</li>';
    }

    echo '</ul>';
?>

<section id="welfare">
    <h1>Welfare Section</h1>

<section>
    <article>
        <h3>Fruition Horticulture</h3>
        <p><a href="https://www.fruition.net.nz/" target="_blank">https://www.fruition.net.nz/</a></p>
    </article>

    <article>
        <h3>Hydro Marlborough</h3>
        <p><a href="https://hydro.marlborough.govt.nz/irrigation/#/" target="_blank">https://hydro.marlborough.govt.nz/irrigation/#/</a></p>
    </article>
</section>

    <div id="add-button">
        <a href="form-post.php">
            +
        </a>
    </div>

<?php include 'partials/bottom.php';