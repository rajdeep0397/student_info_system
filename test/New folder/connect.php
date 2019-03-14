<?php

		$name=$_POST['name'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$mobileno=$_POST['mobileno'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		
	

		
		



			$mysql_host='localhost';
			$mysql_user='root';
			$mysql_pass='';
			$con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
if(!@$con)
{
		die("can't connect to database");
}
else
{
		if(@mysqli_select_db($con,"form"))
		{

				$sql="INSERT INTO info(name,age,gender,mobileno,email,password,branch)
			 		values('$name','$age','$gender','$mobileno','$email','$password')";



			 		if($con->query($sql) === TRUE) 

			 				{
    							echo "<h1>"."New record created successfully"."</h1>"."<br>"."<br>";
							}
					else

						   {
						   			echo "Error: " . $sql . "<br>" . $con->error;
						   }

		}
}





?>


