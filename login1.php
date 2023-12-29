<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Login Page</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
        }
    </style>
</head>
<form action="connect.php" method="POST">

<div class="container login-container">
    <h2 class="text-center mb-4">Login</h2>
    <form   action="connect.php" method="POST">
        <div class="form-group">
            <label for="username" >Username</label>
            <input type="text" name="name" class="form-control" id="username" placeholder="Enter your username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password"  name="password" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <button type="submit" value="Login" name="Login" class="btn btn-primary btn-block">Login</button>
    </form>
    <div class="mt-3 text-center">
        <p>Don't have an account? <a href="signup1.php">Sign Up</a></p>
        
    </div>
</div>

<!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</form>
</body>
</html>
