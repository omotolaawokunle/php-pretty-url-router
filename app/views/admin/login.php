<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <center>
        <form method="POST">
            <label>Username</label><br>
            <input type="text" name="username" /><br>
            <label>Password</label><br>
            <input type="password" name="password" />
            <div><button type="submit">Login</button></div>
            <div><span><?php if(isset($error)){echo $error; } ?></span></div>
        </form>
    </center>
    </body>
</html>