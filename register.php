<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subscribe</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>

<form action="register_handler.php"style="border:1px solid #ccc"method="post">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to Subscribe.</p>
        <hr>

        <label><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="user" required>

        <label><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label><b>Phone Number</b></label>
        <input type="number" placeholder="Enter Phone Number" name="number" required>

        <label>
            <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button"  class="cancelbtn">Cancel</button>
            <button type="submit" name="btn_submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>

</body>
</html>
