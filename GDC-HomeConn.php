<!DOCTYPE html>
<html>
<head>
	<title>GDC Airways - Flights</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Paytone+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="GDC-HomeConnCSSn.css">
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
		<h1 class="hsty" id="he1">Departure</h1>
		<table id="t1" width="600" border="2" cellpadding="5" cellspacing="5">
			<thead>
				<tr>
					<th>Flight Number</th>
					<th>Type</th>
					<th>Origin</th>
					<th>Destination</th>
					<th>Departure Time</th>
					<th>Arrival Time</th>
					<th>Book</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$dbhost="localhost";
					$dbuser="devang";
					$dbpass="qwerty";
					$db="gdcairways";
					$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
					if(!$conn)
					{
						echo "Connection was failed".mysqli_connect_error();
					}
					$origin=$_POST['origin'];
					$origin=mysqli_real_escape_string($conn,$origin);
					$destination=$_POST['destination'];
					$destination=mysqli_real_escape_string($conn,$destination);
					$depart=$_POST['depart'];
					$return=$_POST['return'];
					$passengers=$_POST['passengers'];
					if($_POST['submit'])
					{
						$sql="Select * from flight where Origin='".$origin."' and Destination='".$destination."'";
						if(mysqli_query($conn,$sql))
						{
							$print=mysqli_query($conn,$sql);

							while($row = mysqli_fetch_assoc($print))
							{
								echo "<tr>";
								echo "<td>".$row['FlightNo']."</td>";
								$var_value = $row['FlightNo'];
								$var_value=mysqli_real_escape_string($conn,$var_value);
								echo "<td>".$row['Type']."</td>";
								echo "<td>".$row['Origin']."</td>";
								echo "<td>".$row['Destination']."</td>";
								echo "<td>".$row['DepartureTime']."</td>";
								echo "<td>".$row['ArrivalTime']."</td>";
								echo "<td><form method='GET' action='GDC-Book.php'>
    									  <input type='hidden' name='varname' value='$var_value'>
    									  <input type='submit' value='BOOK' style='color:black'>
										  </form></td>";
								/*echo "<td><a href='GDC-Book.php?varname=<?php echo $var_value ?>'>Book</a></td>";*/
								
								echo "</tr>";
							}
						}
						else
						{
							echo "Something Went Wrong";
						}
					}
				?>
			</tbody>
		</table>

		<h1 class="hsty">Arrival</h1>
		<table id="t2" width="600" border="1" cellpadding="1" cellspacing="1">
			<thead>
				<tr>
					<th>Flight Number</th>
					<th>Type</th>
					<th>Origin</th>
					<th>Destination</th>
					<th>Departure Time</th>
					<th>Arrival Time</th>
					<th>Book</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sqlarr="Select * from flight where Origin='".$destination."' and Destination='".$origin."'";
					if(mysqli_query($conn,$sqlarr))
						{
							$print=mysqli_query($conn,$sqlarr);

							while($row = mysqli_fetch_assoc($print))
							{
								echo "<tr>";
								echo "<td>".$row['FlightNo']."</td>";
								$var_value = $row['FlightNo'];
								$var_value=mysqli_real_escape_string($conn,$var_value);
								echo "<td>".$row['Type']."</td>";
								echo "<td>".$row['Origin']."</td>";
								echo "<td>".$row['Destination']."</td>";
								echo "<td>".$row['DepartureTime']."</td>";
								echo "<td>".$row['ArrivalTime']."</td>";
								echo "<td><form method='GET' action='GDC-Book.php'>
    									  <input type='hidden' name='varname' value='$var_value'>
    									  <input type='submit' value='BOOK' style='color:black'>
										  </form></td>";
								echo "</tr>";
							}
						}
						else
						{
							echo "Something Went Wrong";
						}
				?>
			</tbody>
		</table>
	</div>

</body>
</html>


