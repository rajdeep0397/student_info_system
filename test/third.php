<?php


		
		
              
		

        $mysql_host='localhost';
        $mysql_user='root';
        $mysql_pass='';
        $dbname="si";
        $con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$dbname);

        $br=$_POST['branch'];






        if(!@con)
        {

        			die("can't connect to database");
        } 



        $br=mysqli_real_escape_string($con,$_POST['branch']);
        $sql="SELECT * FROM users WHERE branch='$br'";


		$result=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($result)){



		
														
															 
															   
															   echo "<b>"."Name : "."</b>".$row['name']."<br>".
															   "<b>"."Age  : "."</b>".$row['age']."<br>".
															   "<b>"."Roll no  : "."</b>".$row['roll_no']."<br>".
															   "<b>"."mobile no  : "."</b>".$row['mobile_no']."<br>".
															   "<b>"."E-mail  : "."</b>".$row['email_id']."<br>".
															   "<b>"."Branch:"."</b>".$row['branch']."<br>";



		}
		?>