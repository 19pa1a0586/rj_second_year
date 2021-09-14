<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <style>
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
    </style>
</head>
<h1>Login Page</h1>
    <form action="select.php" method="post">
        <label for="name">Enter UserName:</label>
        <input type="text" name="uname" id="name">
        <br> <br>
        <label for="pass">Enter Password:</label>
        <input type="password" name="pass" id="pass">
        <br> <br>
        <button> Login</button>
        <p> Not yet a member? <a href="registration.php"> Sign up</a></p>
    </form>
</body>

</html>