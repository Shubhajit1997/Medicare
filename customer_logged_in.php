<?php
	session_start();
    $email=$_POST['emailId'];
    $password=$_POST['password'];
	$_SESSION['email']=$email;
    $link=mysqli_connect("localhost","root","","medicare");
    if(mysqli_connect_error())
    {
		echo "connection error";
		exit();
    }
    else
    {
        $query="SELECT * from customerdetails WHERE email='$email' && password='$password'";
        if($result=mysqli_query($link,$query))
        {
			$rowNum=mysqli_num_rows($result);
            $row=mysqli_fetch_array($result);
            
        }
        else
        {
            echo "Some error";
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
							<li><a href="customerlogin.php">LOG OUT</a></li>
						</ul>
					</nav>
				</div>
   			</header>
   			<div id="site_content">
	   			<div id="content">
				   		<br><br><br><br><br><br>
						<?php 
								if($rowNum==0)
								{
									/*echo "User not registered "."<br>"."Please register and log in !";*/
									header("Location: customerLogin.php");

								}
								if($rowNum!=0)
								{
									echo " ".$row['first_nm']." ".$row['last_nm']." is sucessfully logged in !";
								}
								 
						?>
				</div>
				<div id="gallery">
			        <ul class="images">
			    
			           <li><img width="450" height="450" src="images/pic16.jfif" alt="photo_two" /></li>
			    
			        </ul>
			    </div>
				
			</div>
        <br><br><br>
	      <footer>
	      	<p>Copyright© 2020 Medicare Marketplace Ltd.</p>
	      </footer>

	</body>
</html>
