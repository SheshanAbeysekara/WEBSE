<?php
    if (!empty(isset($_SESSION['Email']))) {
      header('Location: ./login.php');
    }
    
  ?>



<?php require_once 'dbconnection.php';?>

<html lang="en">

   <head>

 
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
	<link rel="stylesheet" href="userProfile.css">
	<title>User Profile | TD Motors </title>
	
	
	</head>

  <body>
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="images/profilephoto.jpg"><span class="font-weight-bold">John Doe</span><span class="text-black-50">johndoe@gmail.com</span><span> </span></div>
		</div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
				
		<?php

        $sql = "SELECT `FirstName`,`LastName`  FROM `tblcusdetails` WHERE `Email` =$_SESSION['Email'] ";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            
				
                echo"<div class='row mt-2'>";
                    echo"<div class='col-md-6'><label class='labels'>Name</label><label class='form-control'>".$row["FirstName"]."</label></div>";
                    echo"<div class='col-md-6'><label class='labels'>Surname</label><label class='form-control'>".$row["LastName"]."</label></div>";
					
				
                echo"</div>
                <div class='row mt-3'>
                    <div class='col-md-12'><label class='labels'>Mobile Number</label><label class='form-control'>+94 077 123 4567</label></div>
                    <div class='col-md-12'><label class='labels'>Address Line 1</label><label class='form-control'>No.01,Main Street</label></div>
                    <div class='col-md-12'><label class='labels'>Address Line 2</label><label class='form-control'>Colombo</label></div>
                    <div class='col-md-12'><label class='labels'>Postcode</label></label><label class='form-control'>80000</label></div>
                    <div class='col-md-12'><label class='labels'>State</label></label><label class='form-control'>Colombo</label></div>
                    <div class='col-md-12'><label class='labels'>Area</label></label><label class='form-control'>Western</label></div>
                    <div class='col-md-12'><label class='labels'>Email ID</label></label><label class='form-control'>".$row["Email"]."</label></div>
					
                </div>
                <div class='row mt-3'>
                    <div class='col-md-6'><label class='labels'>Country</label></label><label class='form-control'>Sri Lanka</label></div>
                    <div class='col-md-6'><label class='labels'>State/Region</label></label><label class='form-control'>Colombo</label></div>
                </div>";
				
			}
		}
		?>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button" onclick="redirectFunction()">Edit Profile</button></div>
				
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script>
function redirectFunction() {
  location.replace("editUserProfile.html")
}
</script>

  </body>
  
</html>