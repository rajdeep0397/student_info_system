
<html>

<style>

.b{

	 display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}



.a{
	padding-top: 30px;
	padding-left:650px;
}
img.avtar{


	float: center;

	height: 200px;
	width:200px;
	  border-radius: 50%;
}



body
{


background: #3D7EAA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFE47A, #3D7EAA);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFE47A, #3D7EAA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
font-family: Arial, Helvetica, sans-serif;
}	
</style>



<body>
	
<?php


		
		
              


        $mysql_host='localhost';
        $mysql_user='root';
        $mysql_pass='';
        $dbname="si";
        $con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$dbname);


        $mobileno=$_POST['mobile_no'];
        $password=$_POST['password'];

	
	






        if(!@con)
        {

        			die("can't connect to database");
        } 

        else 
        {        
        	       if(@mysqli_select_db($con,"si"))
        	       {

        	       		$pass=mysqli_real_escape_string($con,$_POST['password']);
        	       		$mno=mysqli_real_escape_string($con,$_POST['mobile_no']);
					     $sql="SELECT * FROM users where mobile_no='$mno' and password='$pass' ";
					     $result=$con->query($sql);
					                          if($row=$result->fetch_assoc())
					                          {

					        				   				
					                          				echo "<div class='b'>";
					                          				echo  "<b>". "<h2>"."Dash-Board for Current user"."</h2>"."</b>"."</u>";

					                          				echo "</div>";

					                          				echo"<div class='a'>";
					        								echo "<div id='img_div'>";

					        									echo"<img src='images/".$row['image']."' class='avtar'>";



					        								echo"</div>";

									        				echo"</div>";
										        			

										        				echo "<h3>"."<b>"."<i>"."Welcome to our page,".$row["name"]."&nbsp;"."Have A great day !!"."</i>"."</h3>"."</b>"."<br>"."<br>";
														
															 
															   
															   echo  "<b>"."Name : "."</b>".$row['name']."<br>".
															   "<b>"."Age  : "."</b>".$row['age']."<br>".
															   "<b>"."Roll no  : "."</b>".$row['roll_no']."<br>".
															   "<b>"."mobile no  : "."</b>".$row['mobile_no']."<br>".
															   "<b>"."E-mail  : "."</b>".$row['email_id']."<br>".
															   "<b>"."Branch:"."</b>".$row['branch']."<br>";

												 

												  

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


