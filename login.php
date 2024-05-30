<?php
require('connect.php');

if(isset($_POST['username']));
{
    $username=$_POST['username'];

    $username=('$conn,$username');

    $password=$_POST['password'];
    
   $password=('$conn,$password');

    $query="SELECT * from `users` where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    
    if(mysqli_num_rows($result) > 0)
    {
        echo "Login successful";
    }
     else {
        echo "Invalid username or password";
    }
}
?>


    <head>
        <title> log in page </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
    </head>

 <div>
        <form method="post" action="dashboard.php">
        <h3>Log In </h3>
            <label for="username"></label>
            <input type="text"  name="username" placeholder="User name" id="user">

            <label for="password"></label>
            <input type ="password"  placeholder="Enter your Password" name="password" id="user">
         

            <input type="submit" value="submit" id="submit">
            <p> <a href="registration.php">Register Now</a> </p>
        </form>
</div>
    </body>
</html>