<html>
<head>
<title>Electricity Bill</title>
<script language="javascript">
function calc(){
var unit1=document.getElementById("cread").value;
var unit2=document.getElementById("pread").value;
var unit=parseInt(unit1)-parseInt(unit2);
if(!isNaN(unit)){
document.getElementById("units").value=unit;
}
}
</script>
</head>
<body bgcolor="whitesmoke">
<center>
<form name="form1" method="post" action="elec.php" target="frame2">
<br><br><br><br>
<b><u>ELECTRICITY BILL GENERATION</u></b><br><br><br>
<table style="width:400px;height:350px;border:1;border-color:black;">
<tr><td>First Name: </td><td><input type="text" name="fname"></td></tr>
<tr><td>Last Name: </td><td><input type="text" name="lname"></td></tr>
<tr><td>Customer ID: </td><td><input type="text" name="cusno"></td></tr>
<tr><td>Address: </td><td><textarea style="width:174px;" name="addr"></textarea></td></tr>
<tr><td>Previous Reading: </td><td><input type="text" name="pread" id="pread" onkeyup="calc();"></td></tr>
<tr><td>Current Reading: </td><td><input type="text" name="cread" id="cread" onkeyup="calc();"></td></tr>
<tr><td>Units consumed: </td><td><input type="text" name="units" id="units"></td></tr>
<tr><td>Date of last payment: </td><td><input type="date" name="cal" style="width:174px"></td></tr>
</table><br><br>
<input type="submit" name="button" value="Generate">

</form>
</center>
</body>
</html>

