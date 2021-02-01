<!DOCTYPE html>
<html>
<head>
	<title>GDC Airways - Ticket</title>
	<link rel="stylesheet" type="text/css" href="GDC-TicketCSS.css">
</head>
<body>

	<div class="container">
		<h1 id="headst">Ticket</h1>
		<table id="tabtk" width="600" border="1" cellpadding="1" cellspacing="1">
			<thead>
				<tr>
					<th>Ticket Number</th>
					<th>Passenger ID</th>
					<th>Passenger Name</th>
					<th>Gender</th>
					<th>Flight ID</th>
					<th>Class</th>
					<th>Terminal</th>
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
					$ticketno=$_POST['ticketno'];
					$ticketno=mysqli_real_escape_string($conn,$ticketno);
					if($_POST['submit'])
					{
						$sql="Select * from ticket where TickNo='".$ticketno."'";
						if(mysqli_query($conn,$sql))
						{
							$print=mysqli_query($conn,$sql);

							while($row = mysqli_fetch_assoc($print))
							{
								echo "<tr>";
								echo "<td>".$row['TickNo']."</td>";
								echo "<td>".$row['PassengerID']."</td>";
								$pass=$row['PassengerID'];
								$pass=mysqli_real_escape_string($conn,$pass);
								$sqlpass="Select Name, Gender from passenger where PassengerID='".$pass."'";
								if(mysqli_query($conn,$sqlpass))
								{
									$p=mysqli_query($conn,$sqlpass);
									while($r=mysqli_fetch_assoc($p))
									{
										echo "<td>".$r['Name']."</td>";
										echo "<td>".$r['Gender']."</td>";	
									}
								}
								else
								{
									echo "Something went wrong";
								}
								echo "<td>".$row['FlightID']."</td>";
								echo "<td>".$row['Type']."</td>";
								echo "<td>".$row['Terminal']."</td>";
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
	</div>

</body>
</html>


