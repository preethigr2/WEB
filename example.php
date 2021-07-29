<html>
    <head>
</head>
<body>
    <?php
    include 'dbcon.php'
    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $mobile= mysqli_real_escape_string($con,$_POST['mobile']);
        $password= mysqli_real_escape_string($con,$_POST['password']);
        $capssword= mysqli_real_escape_string($con,$_POST['cpassword']);
    }
    ?>
    <form="" method="post">
    <input type="text" placeholder="username" name="usernamr" required>
    <input type="text" placeholder="Email" name="email" required>
    <input type="text" placeholder="Phone Number" name="mobile" required>
    <input type="text" placeholder="password" name="password" required>
    <input type="text" placeholder="repeat password" name="cpassword" required>
    <input type="text" placeholder="create Account" name="submit" required>
</form>
</body>
</html>




