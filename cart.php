<?php
	session_start();
	$_SESSION['totalAmount'];
	$rowNum;
	$email=$_SESSION['email'];

    $link=mysqli_connect("localhost","root","","medicare");
    if(mysqli_connect_error())
    {
        echo "Error";
    }

    $query="SELECT * from addtocart WHERE email='$email'";

    if($result=mysqli_query($link,$query))
    {
		$rowNum=mysqli_num_rows($result);
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
				   
				   <br><br>
					<?php
						$totalAmount=0;
						if($rowNum==0)
						{
							echo "Your Cart is Empty, Search medicine to buy !";
						}
						else
						{
							?>
							<div id="scroll">
								<?php
								while($row=mysqli_fetch_array($result))
								{
									$totalBreakup=0;
									echo "Medicine name is = ".$row['medicine_nm']."
											<br>
										Price per piece is = Rs. ".$row['price']."
											<br>
										Selected Quantity = ".$row['qty']." pcs"."
											<br>";
										$price=$row['price'];
										$qty=$row['qty'];
										$totalBreakup=$totalBreakup +  ($price * $qty) ;
										$totalAmount+=$totalBreakup;
										echo "<br>Total amount for ".$row['medicine_nm']." = Rs." .$totalBreakup. "<br><br>";
									
								}
								?>
							</div>
						
						<?php
							echo "====================================";
							$_SESSION['totalAmount']=$totalAmount;
							echo "<br>Total payable amount = Rs." .$_SESSION['totalAmount']. "<br>";

							?>
								<br><br><a href="payment.php"><input type="button" value="Proceed to payment"></a>
						   <?php
								}
							?>
							<br><br><a href="afterMedicine.php" ><input type="button" value="BACK TO SEARCH"></a>
				</div>
				<div id="gallery">
			        <ul class="images">
			    
			           <li><img width="450" height="450" src="images/pic14.jpeg" alt="photo_two" /></li>
			    
			        </ul>
			    </div>
				
			</div>
        <br><br>
	      <footer>
            <p>Copyright© 2020 Medicare Marketplace Ltd.</p>
	      </footer>

	</body>
</html>
