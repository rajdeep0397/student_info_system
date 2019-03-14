<?php
		

		//if upload is pressed
		
		if (isset($_POST['upload'])){

			//the path to store uploaded image

			$target="images/".basename($_FILES['image']['name']);
		}


		$name=$_POST['name'];
		$age=$_POST['age'];
		$roll_no=$_POST['roll_no'];
		$mobile_no=$_POST['mobile_no'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$branch=$_POST['branch'];

		$image=$_FILES['image']['name'];

	
		
	

		
		



			$mysql_host='localhost';
			$mysql_user='root';
			$mysql_pass='';
			$dbname="si";
			$con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$dbname);
if(!@$con)
{
		die("can't connect to database");
}
else
{
		

				$sql="INSERT INTO users(name,age,roll_no,mobile_no,email_id,password,image,branch)
			 		values('$name','$age','$roll_no','$mobile_no','$email','$password','$image','$branch')";

			 		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){

			 			$msg="Image uploaded successfully";
			 		}else{

			 			$msg="There was a problem uploading image";
			 		}



			 		if($con->query($sql) === TRUE) 

			 				{
    							echo "<h1>"."New record created successfully"."</h1>"."<br>"."<br>";
							}
					else

						   {
						   			echo "Error: " . $sql . "<br>" . $con->error;
						   }

		
}





?>


