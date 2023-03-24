<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TD MOTORS</title>
    <link rel="stylesheet" href="style.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="navbar" style="background-color: #587f24;">
        <div>
            <h1 style="color: white;">TD MOTORS</h1>
        </div>
        <nav>
            <ul id='MenuItems'>
                <li><a href='logout.php'>LOG OUT</a></li>
                <li><a href='#aboutus'>About Us</a></li>
            </ul>
        </nav>
    </div>
    <div style="margin-top:100px;">
        <form class="example" action="action_page.php" style="margin:auto;max-width:400px">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
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
</body>
</html>
