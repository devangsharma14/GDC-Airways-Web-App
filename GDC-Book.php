<!DOCTYPE html>
<html>
<head>
	<title>GDC Airways - Booking</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Paytone+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="GDC-BookCSSnew.css">
</head>
<body>
	<!--NavBar-->
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><img src="4b5d99c4-2f06-45be-88b2-5e4bb39f9885.png" id="logo"> GDC AIRWAYS</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        		<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      </button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><strong>Home</strong></a></li>
					<li><a href="GDC-About.php"><strong>About</strong></a></li>
					<li><a href="GDC-Contacts.php"><strong>Contacts</strong></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#signup"><strong>Sign up </strong><i class="fas fa-user-plus"></i></a></li>
					<li><a href="#" data-toggle="modal" data-target="#login"><strong>Login </strong><i class="fas fa-user"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
   	<!--NavBar End-->

  	<!--SingUp Modal-->
	  <div id="signup" class="modal fade" role="dialog">
	    <div class="modal-dialog">
	      <!--SignUp Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">SignUp</h4>
	        </div>
	        <div class="modal-body">
	          	<label for="username">Username:</label>
	            <input type="text" name="usernameSignUp" placeholder="Username" id="usernameSignUp">
	            <br>
	            <label for="email">Email ID:</label>
	            <input type="email" name="emailid" placeholder="Email Id" id="email">
	            <br>
	            <label for="pass">Password:</label>
	            <input type="password" name="passwordSignUp" id="passSignUp">
	            <br>
	            <label for="confpass">Confirm Password:</label>
	            <input type="password" name="confpassword" id="confpass">
	            <br>
	            <input type="Submit" name="submit" id="submitSignUp">
	            <br>
	            <br>
	            <span id="messagecheck1"></span>
	            <br>
	            <span id="messagecheck2"></span>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      <!--SignUp Modal content End-->
	    </div>
	  </div>
	  <!--SignUp Modal End-->

	  <!--Login Modal-->
	  <div id="login" class="modal fade" role="dialog">
	    <div class="modal-dialog">
	      <!--Login Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Login</h4>
	        </div>
	        <div class="modal-body">
	          <label for="username">Username:</label>
	          <input type="text" name="usernameLogin" placeholder="Username" id="usernameLogin">
	          <br>
	          <label for="pass">Password:</label>
	          <input type="password" name="passwordLogin" id="passLogin">
	          <br>
	          <input type="Submit" name="submit">
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      <!--Login Modal Content End-->
	    </div>
	  </div>
	  <!--Login Modal End-->

	  <div class="container">
	  	<form id="fsty" method="POST">
	  		<label for="name">Name: </label>
            <input type="text" name="name" placeholder="Name" id="name">
            <br>
            <label for="male">Male: </label>
            <input type="radio" name="gender" value="male" id="male">
            <br>
            <label for="female">Female: </label>
            <input type="radio" name="gender" value="female" id="female">
            <br>
            <label for="DOB">DOB: </label>
            <input type="date" name="dob" id="DOB">
            <br>
            <label for="mobno">Mobile No: </label>
            <input type="telno" name="mobno" id="mobno">
            <br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="eml">
            <br>
            <label for="type">Class: </label>
            <select name="type">
            	<option value="Economy">Economy</option>
            	<option value="Business">Business</option>
            </select>
            <br>

            <input type="hidden" name="varname2" value="<?php echo $_GET['varname']; ?>">
            <br>
            <input type="submit" name="submit">
	  	</form>
	  </div>

	  

</body>
</html>

<?php
				error_reporting(0);
				$dbhost="localhost";
				$dbuser="devang";
				$dbpass="qwerty";
				$db="gdcairways";
				$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
				if(!$conn)
				{
					echo "Connection was failed".mysqli_connect_error();
				}
				$tickno=rand(3500,4000);
				$tickno=mysqli_real_escape_string($conn,$tickno);
				$passid=rand(1,50);
				$passid=mysqli_real_escape_string($conn,$passid);
				$name=$_POST['name'];
				$name=mysqli_real_escape_string($conn,$name);
				$gender=$_POST['gender'];
				$gender=mysqli_real_escape_string($conn,$gender);
				$dob=$_POST['dob'];
				$dob=mysqli_real_escape_string($conn,$dob);
				$mobno=$_POST['mobno'];
				$mobno=mysqli_real_escape_string($conn,$mobno);
				$email=$_POST['email'];
				$email=mysqli_real_escape_string($conn,$email);
				$type=$_POST['type'];
				$type=mysqli_real_escape_string($conn,$type);
				$varname2=$_POST['varname2'];
				$varname2=mysqli_real_escape_string($conn,$varname2);
	  			
	  
				if($_POST['submit'])
				{
					$sql="Insert into passenger values('".$passid."','".$name."','".$gender."','".$dob."','".$mobno."','".$email."')";
					$sqltick="Insert into ticket values('".$tickno."','".$passid."','".$varname2."','".$type."','1')";
					if(mysqli_query($conn,$sql))
					{
						if(mysqli_query($conn,$sqltick))
						{
							echo "<h1 style='margin-left:200px;color:white;'>Your Ticket Has Been Booked!!</h1>";
							echo "<br><h2 style='margin-left:200px;color:white;'>Passenger ID = ".$passid."</h2>";
							echo "<br><h2 style='margin-left:200px;color:white;'>Ticket Number = ".$tickno."</h2>";
							echo "<a href='index.php#menu1' style='margin-left:200px;color:white;'>Click Here To See Ticket</a>";
						}
						else
						{
							echo "Something Went Wrong";
						}
					}
					else
					{
						echo "Something Went Wrong";
					}
				}

?>