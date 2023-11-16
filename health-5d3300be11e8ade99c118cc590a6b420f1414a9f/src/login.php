
<?php
require 'config.php';
$_SESSION['loginMsg'] = "";
(isset($_POST['username']) ? $username = $_POST['username'] : $username = "");
(isset($_POST['password']) ? $password = $_POST['password'] : $password = "");

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        $_SESSION['userId'] = $row["id"];
        $_SESSION['username'] = $row["username"];
        $_SESSION['name'] = $row["name"];
        $_SESSION['surname'] = $row["surname"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['password'] = $row["password"];
        $_SESSION['position'] = $row["position"];
        $_SESSION['facility'] = $row["facility"];
        $_SESSION['district'] = $row["district"];
        $_SESSION['avatar'] = $row["avatar"];
        
        if ($username != "") {
            $_SESSION['loginMsg'] = '<div class="alert alert-success">Logged in successfully</div>';
            header('Location: src/template.php?page=home');
        }
        
    }
} else {
    $_SESSION['loginMsg'] = '<div class="alert alert-error">Incorrect username or password. Please try again</div>';
    header('Location: index.php?page=login');
}
$conn->close();
?>
<?= $_SESSION['loginMsg']; ?>
<h1>Login</h1>
<form action="" method="post" class="was-validated">
   
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group row">
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="col-sm-9" style="text-align: right !important;">
            <a href="#" type="submit" class="btn btn-primary">Forgot Password</a>
            <a href="?page=register" class="btn btn-info">Register</a>
        </div>
    </div>
</form>
<hr>
<a href="?page=welcome">< Back</a>