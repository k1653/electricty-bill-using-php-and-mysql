<html>
<head>
<title>Electricity bill</title>
</head>
<body bgcolor="pink">
<br><br><br><br>
<?php
if(isset($_POST['button'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$cusno=$_POST['cusno'];
	$addr=$_POST['addr'];
	$cread=$_POST['cread'];
	$units=$_POST['units'];
	$dat=$_POST['cal'];
	
	if($units<=50){
		$bill=$units*9;
	}
	elseif($units>50 && $units<=100){
		$temp=50*12.00;
		$rem_units=$units - 50;
		$bill=$temp+($rem_units*12.00);
	}
	elseif($units>100 && $units<=300){
		$temp=(50*12.00)+(100*15.00);
		$rem_units=$units-300;
		$bill=$temp+($rem_units*15.00);
	}
	

	$date1=new DateTime($dat);
	$date1->modify('+1 month');
	echo "<center><form method='post'>";
	echo "<table border=1 style='text-align:justify;height:400px;width:300px;border-color:black;border-style:dashed;'><th align='center' colspan=2><u>ELECTRICITY BILL</u></th>";
	echo "<tr><td>Name:</td><td>";
	echo "$fname $lname</td></tr>";
	echo "<tr><td>Customer ID:</td><td>";
	echo "$cusno</td></tr>";
	echo "<tr><td>Address:</td><td>";
	echo "$addr</td></tr>";
	echo "<tr><td>Current reading:</td>";
	echo "<td>$cread</td></tr>";
	echo "<tr><td>Units Consumed:</td><td>";
	echo "$units</td></tr>";
	echo "<tr><td>Due date:</td><td>";
	echo $date1->format('d-m-Y');"</td></tr>";
	echo "<tr><td>Bill amount</td><td>";
	echo "Rs. $bill</td></tr>";
	echo "</table>";
	echo "</form>";
	echo "</center>";
}
	?>
	
	</body>
	</html>