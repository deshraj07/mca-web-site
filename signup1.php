<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Signup Page</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .signup-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
        }
    </style>
</head>
<body>

<div class="container signup-container">
    <h2 class="text-center mb-4">Sign Up</h2>
    <form action="signup2.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="fname" class="form-control" id="username" placeholder="Enter your username">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="em" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="upasswo" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">Sign Up</button>
    </form>
    <div class="mt-3 text-center">
        <p>Already have an account? <a href="login1.php">Login</a></p>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
