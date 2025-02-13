<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/loginstyle.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php

          include("php/config.php");
          if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
          

          //verifying the unique email

          $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
          
          if(mysqli_num_rows($verify_query) !=0){
            echo "<div class='message'>
            <p>This email is already registered, Please! Try another one</p>
            </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
          }
          else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Password) VALUES ('$username','$email','$password')") or die("Error Occured");

            echo "<div class='message'>
            <p>Registration successful!</p>
            </div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button>";
          }
        }else{

        ?>

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <lable for="username">Username</lable>
                    <input type="text" name="username" id="username" autocomplete="off" required> 
                </div>

                <div class="field input">
                    <lable for="email">Email</lable>
                    <input type="email" name="email" id="email" autocomplete="off" required> 
                </div>

                <div class="field input">
                    <lable for="password">Password</lable>
                    <input type="password" name="password" id="password" autocomplete="off" required> 
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Sign up" required> 
                </div>

                <div class="links">
                    Already a member? <a href="index.php">Login</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>