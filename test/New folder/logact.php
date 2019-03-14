
<html>
<body bgcolor="#F7FF3">
	<img src="h.jpg" align="center">
<?php
		
		
              


        $mysql_host='localhost';
        $mysql_user='root';
        $mysql_pass='';
        $con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass);


        $mobileno=$_POST['mobileno'];
        $password=$_POST['password'];

	
	






        if(!@con)
        {

        			die("can't connect to database");
        } 

        else 
        {        
        	       if(@mysqli_select_db($con,"form"))
        	       {

        	       		$pass=mysqli_real_escape_string($con,$_POST['password']);
        	       		$mno=mysqli_real_escape_string($con,$_POST['mobileno']);
					     $sql="SELECT * FROM info where mobileno='$mno' and password='$pass' ";
					     $result=$con->query($sql);
					                          if($row=$result->fetch_assoc())
					                          {

					        				   

					        					

									        		
									        			
									        				echo "<h3>"."<b>"."<i>"."Welcome to our page,".$row["name"]."&nbsp;"."Have A great day !!"."</i>"."</h3>"."</b>"."<br>"."<br>";
														
															 
															   echo  "<u>"."<b>". "<h3>"."Dash-Board for Current user"."</h3>"."</b>"."</u>";
															   echo  "<b>"."Name : "."</b>".$row['name']."<br>".
															   "<b>"."Age  : "."</b>".$row['age']."<br>".
															   "<b>"."Gender  : "."</b>".$row['gender']."<br>".
															   "<b>"."mobile no  : "."</b>".$row['mobileno']."<br>".
															   "<b>"."E-mail  : "."</b>".$row['email']."<br>";

												 

												  

        								      }
									        				else
									        				{

									        						echo "invalid username"."<br>";
									        				}
					        			   

    					


                    }

        }


               

			


?>
</body>
</html>


