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
	   				<form name="frmReg" method='post' action="customer_registered.php">
			       		<table cellspacing='5' align="center" >
							<tr>
								<th colspan="2" align="center">Registration</th>
							</tr>
							<tr>
								<td>First Name:</td>
								<td><input type="text" name="first_nm" required pattern="^[A-Za-z]+"></td>
							</tr>
							<tr>
								<td>Last Name:</td>
								<td><input type="text" name="last_nm"></td>
							</tr>
							<tr>
								<td>Gender:</td>
								<td><input type='radio' name='gender' value="Male" checked>male
								<input type='radio' name='gender' value="Female">Female</td>
							</tr>
							<tr>
								<td>Mobile No:</td>
								<td><input type='text' name='phone' required pattern="^[0-9]+">
							</tr>
							<tr>
								<td>Email Id:</td>
								<td><input type="email" name="email" required></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" name="password" required></td>
							</tr>
							<tr>
								<td>Confirm Password:</td>
								<td><input type="password" name="cpassword" required></td>
							</tr>

							<tr>
								<td>state:</td>
								<td><input type='text' name='state' required pattern="^[A-Z a-z]+">
							</tr>
							<tr>
								<td>city:</td>
								<td><input type='text' name='city' required pattern="^[A-Z a-z 0-9]+">
							</tr>
							<tr>
								<td>Pincode:</td>
								<td><input type='text' name='pincode' required pattern="^[0-9]+">
							</tr>
							<tr>
								<td>Address:</td>
								<td><input type='text' name='address' required pattern="^[A-Z a-z 0-9]+">
							</tr>
							<tr></tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT"></td>
							</tr>
						</table>
				</div>
				<div id="gallery">
			        <ul class="images">
			    
			           <li><img width="450" height="450" src="images/pic9.jpeg" alt="photo_two" /></li>
			    
			        </ul>
			    </div>
				
			</div>
        <br><br><br>
	      <footer>
			<p>Copyright© 2020 Medicare Marketplace Ltd.</p>
	      </footer>

	</body>
</html>
