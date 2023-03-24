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
	<link rel="stylesheet" href="editUserProfile.css">
	<title>User Profile | TD Motors </title>
	
	
	</head>

  <body>
  
  <?php
    if(isset($_POST['update']))
    {
        
        $fname = $_POST['FirstName'];
		 $sname = $_POST['Surname'];
		 $email = $_SESSION['Email'];

        $query=mysqli_query($con, "UPDATE tblcusdetails SET FirstName =$fname ,LastName = $sname WHERE Email= $email");
        if ($query) {
            echo "<script>alert('Profile updated Successfully');</script>";
            echo "<script type='text/javascript'> document.location ='editUserProfile.php'; </script>";
        } else{
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    }
   ?>
  
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="images/profilephoto.jpg"><span class="font-weight-bold">John Doe</span><span class="text-black-50">johndoe@gmail.com</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" name="FirstName"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" name="Surname" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" name="phone"></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" name="addr1"></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" name="addr2"></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="Postcode" name="postcode"></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="State" name="state"></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="Area" name="area"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="Email" name="email"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" name=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" name="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button" name="update" onclick="redirectFunction()">Save Profile</button></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script>
function redirectFunction() {
  location.replace("userprofile.html")
}
</script>

  </body>
  
</html>