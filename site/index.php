<?php 
require '_functions.php';
include 'partials/top.php';

// Connect to database
$db = connectToDB();

// Setup a query to get all todo list info
$query = 'SELECT * FROM tasks WHERE completed=0 ORDER BY priority ASC';

try {
    $stmt = $db->prepare($query);
    $stmt->execute();
    $tasks = $stmt->fetchAll();
} catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB List Fetch', ERROR);
    die('Error getting data from the database');
}

consoleLog($tasks);
?>

<section>
    <article>
        <h3>The Website</h3>
        <p>
        The Vineyard Management Website was built with your needs in mind. To navigate around the website, you can either use the scroll feature or use the navigation bar at the top of the screen. 
        </p>
    </article>
    
    <article>
        <h3>Weather Updates</h3>
        <p>
        On  the website, you will find real-time weather updates right on the site, so you can easily check the forecast and plan your workday around any weather that might be coming your way
        </p>
    </article>

    <article>
        <h3>Vineyard Help</h3>
        <p>
        The app also lets you quickly report things like broken posts or other vineyard problems, so you can get them fixed up fast and keep everything running smoothly.
        </p>
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

<ul id="todo-list">
    <?php foreach ($tasks as $task): ?>
        <li>
            <span class="priority p<?php echo htmlspecialchars($task['priority']); ?>">
                <?php echo htmlspecialchars($task['priority']); ?>
                <?php echo htmlspecialchars($task['vineyard']); ?>
                <?php echo htmlspecialchars($task['row']); ?>
                <?php echo htmlspecialchars($task['post']); ?>
            </span>

            <a href="delete-task.php?id=<?php echo htmlspecialchars($task['id']); ?>"
               onclick="return confirm('Are you sure?');">
                🗑️
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<section id="welfare">
    <h1>Welfare Section</h1>

    <article>
        <h3>Fruition Horticulture</h3>
        <p><a href="https://www.fruition.net.nz/" target="_blank">https://www.fruition.net.nz/</a></p>
    </article>

    <article>
        <h3>Hydro Marlborough</h3>
        <p><a href="https://hydro.marlborough.govt.nz/irrigation/#/" target="_blank">https://hydro.marlborough.govt.nz/irrigation/#/</a></p>
    </article>

    <div id="add-button">
        <a href="form-post.php">+</a>
    </div>
</section>

<?php include 'partials/bottom.php'; ?>
