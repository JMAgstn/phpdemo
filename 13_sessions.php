<?php
/* ----- $_GET & $_POST Superglobals---- */
/* We can pass data through urls and forms using the $_GET and $_POST superglobals */
session_start();
if (isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == 'ryan' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /sp404/phpdemo/extras/dashboad.php');
    } else {
        echo 'Incorrect username or password';
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
    <label for="username">
    Username:
    </label>
    <input type="text" name="username">
</div>
<br>
<div>
    <label for="password">Password:</label>
    <input type="text" name="password">
</div>
<br><br>
<input type="submit" name="submit" value="submit">
</form>
