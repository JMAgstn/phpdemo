<?php
/* ----- $_GET & $_POST Superglobals---- */
/* We can pass data through urls and forms using the $_GET and $_POST superglobals */

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    echo $name;
    echo $age;
}
?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?name=Ryan&age=40">Click</a>;

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
    <label for="name">
        Name:
    </label>
    <input type="text" name="name">
</div>
<br>
<div>
    <label for="age">Age:</label>
    <input type="text" name="age">
</div>
<br><br>
<input type="submit" name="submit" value="submit">

</form>
