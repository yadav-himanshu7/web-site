<?php include("connection.php");
error_reporting(0);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume -login-Register</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration form

        </div>
        <div class="form">
            <div class="input_field">
                <label>First name</label>
                <input type="text" class=input name="fname">
            </div>
            
            <div class="input_field">
                <label>last name</label>
                <input type="text" class=input name="lname">
            </div>
            <div class="input_field">
                <label>Phone</label>
                <input type="text" class=input name="phone">
            </div>
            <div class="input_field">
                <label>Email</label>
                <input type="text" class=input name="email">
            </div>
            
            <div class="input_field">
                <label> password</label>
                <input type="password" class=input name="password">
            </div>
            <div class="input_field">
                <label>confrim password</label>
                <input type="password" class=input name="conpassword">
            </div>
            <div class="input_field">
                <label class="check">
                <input type="checkbox" >
                <span class="checkmark"></span>

                </label>
                <p>Agree to terms and condition</p>
                <input type="text" class=input>
            </div>

            <div class="input field">
                <input type="submit" value="register" class="btn" name="register">
            </div>
            
            
        </div>
        </form>
    </div>    

</body>
</html>

<?php
    
    if($_POST['register'])
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $pwd=$_POST['password'];
        $cpwd=$_POST['conpassword'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];



        if($fname != "" && $lname !="" && $pwd !="" && $email !="" && $phone !="")
        {





        $query="INSERT INTO form values('$fname','$lname','$pwd','$cpwd','$email','$phone')";
        $data=mysqli_query($conn,$query);

        if($data)
        {
            echo "Data Inserted into Database";
        }
        else
        {
            echo "Failed";

        }
    }
    else
    {
        echo "Please fill the form";
    }
    }

?>