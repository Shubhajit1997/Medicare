<?php
	session_start();
	
	$medicine_nm=$_POST['medicineName'];
	$_SESSION['medicine_nm']=$medicine_nm;
    $link=mysqli_connect("localhost","root","","medicare");
    if(mysqli_connect_error())
    {
        echo "Error";
    }

    $query="SELECT * from medicinedetails WHERE medicine_nm='$medicine_nm'";

    if($result=mysqli_query($link,$query))
    {
		$row=mysqli_fetch_array($result);
		$rowNum=mysqli_num_rows($result);
		if($rowNum!=0)
		{
			$_SESSION['price']=$row['price'];
		}

    }
	
    else
    {
        echo "Some error";
        
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
							<li><a href="index1.html">HOME</a></li>
							<li><a href="afterMedicine.php">MEDICINE</a></li>				                 
							<li><a href="afterContacts.html">CONTACT US</a></li>
							<li><a href="cart.php">CART</a></li>
							<li><a href="customerLogin.php">LOG OUT</a></li>
						</ul>
					</nav>
				</div>
   			</header>
			   
   			<div id="site_content">
	   			<div id="content">
	   				<form name="addToCart" method='post' action="addToCart.php">

					<?php

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
						if($rowNum!=0)
						{
							$s=$row['medicine_nm'];
						
							echo "
								Medicine name is = ".$row['medicine_nm']."<br>
								Price per piece is = Rs. ".$row['price']."<br>
								Available Quantity = ".$row['quantity']."<br>		
								Drug name = ".$row['drug_nm']."<br> 
								Directions = ".$row['directions']."<br>
								Side effects = ".$row['side_effects']."<br>
								Warnings = ".$row['warnings']."<br>
								";
								?>
								<br>Enter Quantity :<input type="number" name="qty" min="1" max="100">
								<br><input type="submit" name="submit" value="Add To Cart"></form>
								<?php
						}
					?>
	   				<br><br><a href="afterMedicine.php" ><input type="button" value="BACK TO SEARCH"></a></li>
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
