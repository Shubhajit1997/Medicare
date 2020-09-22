<?php
	$link=mysqli_connect("localhost","root","","medicare");
    if($link -> connect_errno)
    {
		echo "Error";
		exit();
    }

    $query="SELECT * from medicinedetails";

   if ($result = mysqli_query($link,$query)) 
   	{
		$rowNum=mysqli_num_rows($result);
		//$row=mysqli_fetch_array($result);
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
	  <link rel="stylesheet" type="text/css" href="css/style2.css" />
	 
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
					<br><br><br>
	   				<form name="frmReg" method='post' action="search_medicine_result.php">	
			       		<table cellspacing='5' align="center" >
							<tr>
								<th colspan="2" align="center"><u>Select Medicine From The List</u></th>
							</tr>
							<tr>
								<td>Medicine Name:</td>
								<td><input type="text" name="medicineName" required pattern="^[A-Za-z\s]+"></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" name="submit" value="SHOW DETAILS"></td>
							</tr>
						</table>
					</form>
					
					<h3>ALL MEDICINE LIST</h3>
					===================================================
					<div id="scroll">	
							<table cellspacing='5' >
								<tr>
									<td><strong><u>Medicine Name</u></strong></td><td>&nbsp;&nbsp;&nbsp;</td>
									<td><strong><u>Price Per piece</u></strong></td><td>&nbsp;&nbsp;&nbsp;</td>
									<td><strong><u>Drug Name</u></strong></td><td>&nbsp;&nbsp;&nbsp;</td>
								</tr>

								<?php while($row = mysqli_fetch_array($result)   ) {   ?>
								<tr>
									<td><?php echo "".$row['medicine_nm'] ?></td><td>&nbsp;&nbsp;&nbsp;</td>
									<td><?php echo "".$row['price'] ?></td><td>&nbsp;&nbsp;&nbsp;</td>
									<td><?php echo "".$row['drug_nm'] ?></td><td>&nbsp;&nbsp;&nbsp;</td>
								</tr>
							<?php   }    ?>


								<tr></tr><tr></tr>
								<tr>
								
								</tr>
							</table>
						
					</div>
					<br><br>
				</div>
				<div id="gallery">
			        <ul class="images">
			    
			           <li><img width="450" height="450" src="images/2.jpg" alt="photo_two" /></li>
			    
			        </ul>
			    </div>
				
			</div>
        <br><br><br>
	      <footer>
            <p>Copyright© 2020 Medicare Marketplace Ltd.</p>
	      </footer>

	</body>
</html>
