<?php include 'common-top.php'; ?>

<h1>Sign Up Complete</h1>
<link rel="stylesheet" href="styles.css">

<?php

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

echo '<p>' . $_POST['user'] .  ' your account has been created';

echo '<p>Password:' . $_POST['pass'];

echo '<p>A condfirmation email has been sent to ' . $_POST['mail'];

include 'common-bottom.php';