<html>
    <head>
        <title>Online Polling system - Home</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body >
    

        
        
            <center>
            <div id="headerSection">
            <h1><marquee width="80%" direction="left" height="100px"">Online Polling System</marquee></h1>  
            </div>
            <hr>

            <div id="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 27%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <button><a href="routes/register.php">Register here</a></button>
                </form>
            </div>

            </center> 
    </body>
</html>