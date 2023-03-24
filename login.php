<?php
    session_start();
    //Databse Connection file
    include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TD MOTORS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        ::placeholder {
          color: whitesmoke;
          opacity: 1; /* Firefox */
        }
        
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
         color: whitesmoke;
        }
        
        ::-ms-input-placeholder { /* Microsoft Edge */
         color: whitesmoke;
        }
        </style>
</head>
<body>
    
<div>   
<div class="full-page">
    <div class="navbar">
        <div>
            <h1 style="color: white;">TD MOTORS</h1>
        </div>
        <nav>
            <ul id='MenuItems'>
                <li><a href='#'>Home</a></li>
                <li><a href='#aboutus'>About Us</a></li>
            </ul>
        </nav>
    </div>
   <?php
    if(isset($_POST['login']))
    {
        $emailid = $_POST['Email'];
        $pass = $_POST['password'];

        $query = mysqli_query( $con, "select * from tblcusdetails where Email='$emailid' and Password='$pass' ");
        $res = mysqli_fetch_array($query);

        if(is_array($res)){
            echo "<script>alert('Logged In');</script>";
            echo "<script type='text/javascript'> document.location ='login.php'; </script>";
            $_SESSION["Email"] = $res['Email'];
        } else{
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }

        if(isset($_SESSION["Email"])){
            header("Location:homepage.php");
        }
    }
   ?>
    <div id='login-form'class='login-page'>
        <div class="form-box">
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                <button type='button'onclick='register()'class='toggle-btn'>Register</button>
            </div>
            <form id='login' class='input-group-login' method="POST" action="login.php">
                <div><input type='text'class='input-field'placeholder='Email Id' name="Email" required >
                    <input type='password'class='input-field'placeholder='Enter Password' name="password" required>
                    <br><br>
                    <br><br>
                    <button type='submit'class='submit-btn'>Log in</button><br>
                    <button type='submit'class='submit-btn' name="login"><a href="reset.html" style="color: black;font-size: medium;">Reset Password</a></button><br>
                </div>
               
            </form>
            <form id='register' class='input-group-register' method="POST" action="login.php">
                <input type='text'class='input-field'placeholder='First Name' name="fname" required>
                <input type='text'class='input-field'placeholder='Last Name ' name="sname" required>
                <input type='email'class='input-field'placeholder='Email Id' name="emailid" required>
                <input type='password'class='input-field'placeholder='Enter Password' name="pass" required>
                <input type='password'class='input-field'placeholder='Confirm Password' name="conpass" required>
                
                <button type='submit'class='submit-btn' name="reg">Register</button>
            </form>
        </div>
    </div>
    <div class="footer" style="margin-top:200px;height: 180px;">
        <footer id="aboutus">
            <p style="font-size:medium;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                <span class="glyphicon glyphicon-phone" style="font-size:large;"></span>Contact No : 0112 365 895<br><br>
                <span class="glyphicon glyphicon-map-marker" style="font-size:large;"></span>Address : Imaduwa,Galle Road Galle, Sri Lanka<br><br>
                <span class="glyphicon glyphicon-envelope" style="font-size:large;"></span> Email : tdmotors@gmail.com<br><br>
            </p>
        </footer>
    </div>
</div>
</div>

<script>
    var x=document.getElementById('login');
    var y=document.getElementById('register');
    var z=document.getElementById('btn');
    function register()
    {
        x.style.left='-400px';
        y.style.left='50px';
        z.style.left='110px';
    }
    function login()
    {
        x.style.left='50px';
        y.style.left='450px';
        z.style.left='0px';
    }
</script>
<?php
    if(isset($_POST['reg']))
    {
        //getting the post values
        $fname=$_POST['fname'];
        $sname=$_POST['sname']; 
        $emailid=$_POST['emailid'];
        $pass=$_POST['address'];
        $conpass=$_POST['conpass'];

        if($pass == $conpass){
            $p = $pass;
        }else{
            echo "<script>alert('Passwords aren't matching');</script>";
        }

          // Query for data insertion
        $query=mysqli_query($con, "insert into tblcusdetails(FirstName,LastName, Email, Password) value('$fname','$sname', '$emailid', '$p')");
        if ($query) {
            echo "<script>alert('Registered Successfully');</script>";
            echo "<script type='text/javascript'> document.location ='login.php'; </script>";
        } else{
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    }  
?>
</body>

</html>



