<?php
		session_start();
		$email=$_SESSION['email'];
		$price=$_SESSION['price'];
		$medicine_nm=$_SESSION['medicine_nm'];
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="medicare";

        $link=mysqli_connect($servername,$username,$password,$dbname);
        if(!$link)
        {
            echo "Connection error";
        }
        else
        {
            $query="INSERT INTO addtocart(email,medicine_nm,qty,price)
                    VALUES (
                            '$email',
                            '$medicine_nm',
                            '$_POST[qty]',
							'$price'
                        )";
            
            if($result=mysqli_query($link,$query))
            {
                
            }
            else
            {
                echo 'Something went wrong';
            }
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
				    <?php
						$queryForPaymentReciept="SELECT id FROM addtocart WHERE email='$email' && medicine_nm='$medicine_nm' ";
						if($result1=mysqli_query($link,$queryForPaymentReciept))
						{
							$row1=mysqli_fetch_array($result1);
							echo "<br><br><br><br><br><br>Your order id = MEDICINESHOPX-".$row1['id'];
							echo "<br><br>Item added to Cart !";
						}
						else
						{
							echo "<br><br><br><br>Please try again there is some error !";
						}
					?>
                    <br><br><a href="afterMedicine.php" ><input type="button" value="BACK TO SEARCH"></a></li>
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

