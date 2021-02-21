<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function myfun(){
			alert('Registered');
		}
	</script>
</head>
<body>
<?php 
	if ( $_SERVER['REQUEST_METHOD']=='POST'){
		$name = filter_input(INPUT_POST, 'FirstName');
		$lastmame = filter_input(INPUT_POST, 'LastName');
		$email = filter_input(INPUT_POST, 'EmailId');
		$Birth = filter_input(INPUT_POST, 'DateOfBirth');
		$gender = filter_input(INPUT_POST, 'gender');
		$Category = filter_input(INPUT_POST, 'Categ');
		$SCategory = filter_input(INPUT_POST, 'SCateg');
		$fathere = filter_input(INPUT_POST, 'father');
		$mothere = filter_input(INPUT_POST, 'Mother');
		$Mobnumber = filter_input(INPUT_POST, 'Mobile');
		$PNumber = filter_input(INPUT_POST, 'PMobile');
		$Add = filter_input(INPUT_POST, 'Address');
		$Pin = filter_input(INPUT_POST, 'Pin');
		$city = filter_input(INPUT_POST, 'Cityy');
		$Nation = filter_input(INPUT_POST, 'Nationality');
		$Subject = filter_input(INPUT_POST, 'Coursesub');
		$root = 'localhost';
		$password = '';
		$dbname = 'college';
		$dbusername = 'root';
		$conn = new mysqli($root,$dbusername,$password,$dbname);
		if(mysqli_connect_error()){
			echo "error in connection";
			die('Connect Error ('.mysqli_connect_errono().')'.mysqli_connect_error());
		}
		else{
			$g = rand(1000,9999);
			$sql = "INSERT INTO registrationdetails(sid,fname,lname,email,dob,gender,category,subcategory,fathername,mothername,snumber,pnumber,address,pincode,city,nationality,course) VALUES ('$g','$name','$lastmame','$email','$Birth','$gender','$Category','$SCategory','$fathere','$mothere','$Mobnumber','$PNumber','$Add','$Pin','$city','$Nation','$Subject')";
			if($conn->query($sql)){
				echo '<script type="text/javascript">',
	     		'myfun();',
	     		'</script>'
				;
			}
			else{
				echo "some error occured";
			}
		}
	}
?>	
</body>
</html>