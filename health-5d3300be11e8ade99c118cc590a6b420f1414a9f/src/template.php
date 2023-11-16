<?php
session_start();
if($_SESSION['name'] == ""){
    header('Location: ../index.php?page=login');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/forms.css" />
</head>
<body>
    <?php include "menu.php" ?>

    <div class="container section-transbox">

        <?php
            (isset($_GET['page']) ? $page = $_GET['page'] : $page = "home"); 

            echo '<span class="badge badge-secondary">' . strtoupper($_SESSION['name']) . " / " . strtoupper($page) . '</span><hr>';

            switch ($page) {
                case "requisition":
                    include "requisitions.php";
                    break;
                case "transactions":
                    include "transactions.php";
                    break;
                case "green":
                    include "requisition.php";
                    break;
                case "logout":
                    include "logout.php";
                    break;
                default:
                    include "home.php";
            }
        ?>

    </div>
</body>
</html>
</html>