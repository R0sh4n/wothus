
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="process.php" method="POST">
        <p>
                <label>Username</label>
                <input type="text" id="user" name="user" />
            </p>
            <p>
                <label>password</label>
                <input type="password" id="pass" name="pass" />
              </p>
              <p>
                <input type="submit" id="btn" value="Login" />
            </div>
        </form>
    </div>    
</body>
</html>
