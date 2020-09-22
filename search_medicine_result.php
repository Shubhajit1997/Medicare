<?php
    $mName=$_POST['medicineName'];
	$link=mysqli_connect("localhost","root","","medicare");
    if($link -> connect_errno)
    {
		echo "Error";
		exit();
    }

    $query="SELECT * from medicinedetails WHERE medicine_nm='$mName'";

   if ($result = mysqli_query($link,$query)) 
   	{
		$rowNum=mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
	}
	else
	{
		echo "some error";
	}  
?>

<!DOCTYPE HTML>
<html>

	<head>
	  <title>MEDICARE</title>
	  <link rel="stylesheet" type="text/css" href="css/style.css" />
	 
	</head>

	<body>
		 <div id="main">
		 <header>
    			<div id="header">
	    			<nav>
	    				<ul id="menu">
							<li ><a href=#><img width="100" height="80" src="images/medicare.jpg" alt="photo_one" /></a></li>
	    					<li><a href="index.html">HOME</a></li>
							<li><a href="medicine.php">MEDICINE</a></li>				                 
	    					<li><a href="register.php">REGISTER</a></li>	 
				    		 <li><a href="customerLogin.php">LOGIN</a>
							  </li>
							<li><a href="contacts.html">CONTACT US</a></li>
						
	       				 </ul>
	     			 </nav>
	     		</div>
   			</header>
			   
   			<div id="site_content">
	   			<div id="content">
				   <br><br><br><br><br><br>
					<?php
						
						if($rowNum!=0)
						{
							echo "Medicine name is = ".$row['medicine_nm']."<br>Price is = Rs. ".$row['price']."<br>Available Quantity = ".$row['quantity']."<br>Drug name = ".$row['drug_nm']."<br> Directions = ".$row['directions']."<br>Side effects = ".$row['side_effects']."<br>Warnings = ".$row['warnings']."<br>";
						}
						if($rowNum==0)
						{
							echo " Sorry !!!!   This medicine is not found please write it correctly or press suggest button to suggest us.";
							mysqli_free_result($result);
							?>
							<html>
								<body>
									<br><br><a href="suggest.html"><input type="button" value="SUGGEST"></input></a>
								</body>
							</html>
							<?php
						}
						
					?>
	   				<br><br><a href="medicine.php" ><input type="button" value="BACK TO SEARCH"></a></li>
				</div>
				<div id="gallery">
			        <ul class="images">
			    
			           <li><img width="450" height="450" src="images/pic17.jpeg" alt="photo_two" /></li>
			    
			        </ul>
			    </div>
				
			</div>
        <br><br><br>
	      <footer>
            <p>Copyright© 2020 Medicare Marketplace Ltd.</p>
	      </footer>

	</body>
</html>
