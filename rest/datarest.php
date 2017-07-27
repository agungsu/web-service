<html> 
	<head> 
	<script type="text/javascript" src="libs/jquery.min.js"></script>
	<script type="text/javascript" src="libs/jquery.form.js"></script>
		<title>Tugas 2</title> 
		<style type="text/css"> 
		.labelfrm { 
			display:block; 
			font-size:small; 
			
			
		} 
		.error { 
			font-size:small; 
			color:red; 
		} 
		</style> 
	</head> 
	<body> 
		<form action="" method="post" id="frm"> 
			<label for="nim" class="labelfrm">NIM: </label> 
			<input type="text" name="nim" id="nim" maxlength="20" class="required" size="15"/> 		 
			<label for="nama" class="labelfrm">NAMA: </label> 
			<input type="text" name="nama" id="nama" size="30" class="required"/> 
 
			<label for="alamat" class="labelfrm">ALAMAT: </label> 
			<textarea name="alamat" id="alamat" cols="40" rows="4" class="required"></textarea> 
 
 			<label for="prodi" class="labelfrm">prodi: </label> 
			<input type="text" name="prodi" id="prodi" maxlength="30" class="required" size="15"/> 	

			<input type="submit" name="Input" value="Input" id="input"/> 
		</form> 
	</body> 

</html>
<?php
include 'koneksi.php';
  
// Check for the path elements
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

$path = $_SERVER[PATH_INFO];    
if ($path != null) {
$path_params = spliti ("/", $path);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

if ($path_params[1] == null) {

		$con=mysqli_connect("localhost","root","","akademik");
// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql="SELECT nim,nama,prodi FROM mahasiswa";
	echo "<data>";
	if ($result=mysqli_query($con,$sql))
	{
  // Fetch one and one row
  	
	while ($row=mysqli_fetch_row($result))
		{
		echo "<mahasiswa>";
		echo "<nim>".$row[0]."</nim>";
		echo "<nama>".$row[1]."</nama>";
		echo "</mahasiswa>";
		}
  // Free result set
	mysqli_free_result($result);
	}
	echo "</data>";
	mysqli_close($con);

}
else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
if ($path_params[1] != null) {
		$con=mysqli_connect("localhost","root","","akademik");
// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql="SELECT nim,nama,prodi FROM mahasiswa where nim = '$path_params[1]'";
	echo "<data>";
	if ($result=mysqli_query($con,$sql))
	{
  // Fetch one and one row
  	
	while ($row=mysqli_fetch_row($result))
		{
		echo "<mahasiswa>";
		echo "<nim>".$row[0]."</nim>";
		echo "<nama>".$row[1]."</nama>";
		echo "</mahasiswa>";
		}
  // Free result set
	mysqli_free_result($result);
	}
	echo "</data>";
	mysqli_close($con);

	
}
}
	
}
?> 