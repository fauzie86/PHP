<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <form action="login2.php" method="POST" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="identifier">Username or Phone Number</label>
            <input type="text" class="form-control" name="identifier" id="identifier" placeholder="Enter username or phone number">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email or phone number with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- php start here -->
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["identifier"]) && isset($_POST["password"])) {
    $identifier = $_POST["identifier"];
    $password = $_POST["password"];

    // validate login credentials
    if (($identifier === "fauzi" || $identifier === "1234567890") && $password === "fauzi123") {
        $_SESSION["username"] = $identifier;
        echo '<script>alert("Login successful!");</script>';
    } else {
        echo '<script>alert("Invalid login credentials!");</script>';
    }
}
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    function validateForm() {
        var identifier = document.getElementById("identifier").value;
        var password = document.getElementById("exampleInputPassword1").value;

        if (identifier === "" || password === "") {
            alert("Please fill in both fields.");
            return false;
        }
        return true;
    }
</script>

</body>
</html>
