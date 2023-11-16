
<!DOCTYPE html>
<html>
<head>
    <title>Payment Pack</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/form.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css" />
</head>
<!-- Form for logging in the users -->

<body>
    <div class="container">
        <div class="background">
            <div class="transbox">
            <?php
            
            (isset($_GET['page']) ? $page = $_GET['page'] : $page = "welcome"); 

            switch ($page) {
                case "login":
                    include "src/login.php";
                    break;
                case "register":
                    include "src/regform.php";
                    break;
                case "welcome":
                    include "src/welcome.php";
                    break;
                default:
                    include "src/welcome.php";
            }
        ?>
            </div>
        </div>

    </div>
    <script src="/assets/bootstrap/js/bootstrap.js"></script>
</body>


</html>

</html>