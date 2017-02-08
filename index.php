	<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Connexion</title>
        <link rel="stylesheet" href="global.css" />
    </head>

    <?php include('header.php'); ?>

    <body>
    <div id="login">
        <h1>Log in</h1>
        <form action="controllers/connexion.php" method="post">
            <p>Email
            <input type="email" name="email" required/>
            </p>
            <p>Password
            <input type="password" name="password" required/>
            </p>
            <p>
            <input type="submit" value="login" required/>
            </p>
        </form>
    </div>
    
    <div id="signin">    
        <h1>Sign in</h1>
        <form action="controllers/signin.php" method="post">
            <p>Nickname
            <input type="text" name="nickname" required/>
            </p>
            <p>Email
            <input type="email" name="email" required/>
            </p>
            <p>Password
            <input type="password" name="password" required/>
            </p>
            <p>Confirm Password
            <input type="password" name="password_confirmation" required/>
            </p>
            <p>
            <input type="submit" value="Submit" />
            </p>
        </form>
    </div>

    </body>
</html>