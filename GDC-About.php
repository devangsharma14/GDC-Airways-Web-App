<!DOCTYPE html>
<html>
<head>
	<title>GDC Airways - About</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="GDC-AboutCSS.css">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Paytone+One" rel="stylesheet">
</head>

<body>

  <!--NavBar-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
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
					<li class="active"><a href="#"><strong>About</strong></a></li>
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
      <!--SingUp Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SignUp</h4>
        </div>
        <div class="modal-body">
        	<label for="username">Username:</label>
          <input type="text" name="username" placeholder="Username" id="username">
          <br>
          <label for="email">Email ID:</label>
          <input type="email" name="emailid" placeholder="Email Id" id="email">
          <br>
          <label for="pass">Password:</label>
          <input type="password" name="password" id="pass">
          <br>
          <label for="confpass">Confirm Password:</label>
          <input type="password" name="confpassword" id="confpass">
          <br>
          <input type="Submit" name="submit">
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
          <input type="text" name="username" placeholder="Username" id="username">
          <br>
          <label for="pass">Password:</label>
          <input type="password" name="password" id="pass">
          <br>
          <input type="Submit" name="submit">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!--Login Modal content End-->
    </div>
  </div>
  <!--Login Modal End-->


  <h1>About</h1>
  <div class="container" id="cell">
  	<p>Welcome aboard GDC Airways, India's premier Domestic airline which provides you with one of the finest experiences across the skies. Our high standards of service and reliability, efficient operations and focus on innovation has enabled us become one of India's favourite domestic airline.</p>
  	<p>At GDC Airways, we take a holistic approach to corporate responsibility alongside our efforts to be India's best airline.  </p>
  <br>
  <p>All of our efforts are focused around adding value: to our people, our communities and our Country. Our agenda is coordinated at the GDC Aviation Group level, to ensure that we have a cohesive programme of initiatives that covers all aspects of our business and operations.</p>
  <br>
  <p>All initiatives are conducted within GDC’s ‘Together’ framework.</p>
  <br>
  <p>Growing together<br>
  Support for the India Make, in India vision.</p>
  <br>
  <p>Greener together<br>
  Commitment to minimise our environmental impact.</p>
  <br>
  <p>Working together<br>
  The development and well-being of our diverse employees.</p>
  <br>
  <p>Giving together<br>
  Contributions to charities and humanitarian relief.</p>
  <br>
  <p>Our Responsibility<br>
  More details about the ‘Together’ framework and initiatives are available in regular reports, published since 2010.</p>
  </div>
</body>
</html>