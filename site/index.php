<?php include 'partials/common-top.php'; ?>

<div id="forms">

    <form method="POST" action="process-signup.php">
        <h2>Sign In Bozo</h2>

        <label>Name</label>
        <input name="user" type="text" required>

        <label>Email</label>
        <input name="mail" type="email" required>

        <label>Password</label>
        <input name="pass" type="password" required>

        <input type="submit" value="Register">
    </form>
</body>

<body>

    <form method="POST" action="process-calc.php">
        <h2>Add Some Numbers Kid</h2>

        <label>1st Number</label>
        <input name="num1" type="number" required>

        <label>2nd Number</label>
        <input name="num2" type="number" required>

        <label>
            <input name="operator" value="add" type="radio" checked>
            Add
        </label>

        <label>    
            <input name="operator" value="sub" type="radio">
            Subtract
        </label>

        <label>
            <input name="operator" value="mul" type="radio">
            Multiply
        </label>

        <label>
            <input name="operator" value="div" type="radio">
            Divide
        </label>

        <input type="submit" value="Mathmatical Answer">
    </form>

<?php include 'partials/common-bottom.php';