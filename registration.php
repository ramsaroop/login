
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="registeration.css">
    </head>
    <body>
        
    
<?php
require('connect.php');

if (isset($_REQUEST['username']))
{
$username=$_REQUEST['username'];

// $username=($conn, $username);

$password=$_REQUEST['password'];


// $password=($conn,$password);

$confirmpassword=$_REQUEST['confirmpassword'];

// $confirmpassword=($conn, $confirmpassword);

$query="INSERT INTO `users` (username, password ,confirmpassword) VALUES ('$username','$password','$confirmpassword')";
$result=mysqli_query($conn,$query);

if($result){
    echo"registeration successfull";
}

else
{
    echo "something went wrong";
}

}

?>
    <div>
        <form method="post" action="">
            <h1> Registration Form </h1>
            <label for="username"></label>
            <input type="text" placeholder="User Name"  name="username" id="user"  required><br>

            <label for="password"></label>
            <input type="password" placeholder="Enter your Password" name="password" id="user"   required> <br>

            <label for="confirmpassword"></label>
            <input type="password" placeholder="confirm Password" name="confirmpassword" id="user"   required> <br>
             <input type="submit" onclick="showalert()" value="Submit"  id="button">  
            <p><a href="login.php">Already have an account</a></p>
           
             <script>
                function showalert()
                {
                    alert("you are registered  successfully");
                }
             </script>
            
             
             
              <p><a href="forgot password">forgot password?</a></p>
              
        </form>
 </div>
        <script src="" async defer></script>
    </body>
</html>
