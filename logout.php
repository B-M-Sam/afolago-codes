<?php
    session_start();
    if(isset($_POST['logout'])){
        session_unset();
        header("Location: index.php");
    }
?>

<form method="post">
    <input type="submit" value="Logout" name="logout">
</form>