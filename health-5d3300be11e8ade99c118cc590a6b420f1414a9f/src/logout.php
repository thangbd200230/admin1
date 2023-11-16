<?php
(isset($_GET['logout']) ? $logout = $_GET['logout'] : $logout = "stay"); 

if ($logout == "logout") {
   
    session_unset();  
    session_destroy(); 

    header('Location: ../index.php?page=welcome');
}
?>

<div class="alert success">
    Are you sure you want to end this session?
    <form action="logout.php" method="get">
        <input type="hidden" name="logout" value="logout">
        <button class="btn btn-danger" type="submit">Logout</button>
        <a class="btn btn-success" href="?page=home">Stay</a>
    </form>
</div>