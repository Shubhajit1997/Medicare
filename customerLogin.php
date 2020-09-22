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
	   				<form action='customer_logged_in.php' name="frmReg" method='post' >
			       		<table cellspacing='5' align="center" >
							<tr>
								<br><br><br><br><br>
								<th colspan="2" align="center">Customer Login</th>
							</tr>
							
							<!-- <tr>
								<td>Mobile No:</td>
								<td><input type='text' name='mobileNo' required pattern="^[0-9]+">
							</tr> -->
							<tr>
								<td>Email Id:</td>
								<td><input type="email" name="emailId" required></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" name="password" required></td>
							</tr>
							<tr></tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT"></td>
							</tr>
						</table>
				</div>
				<div id="gallery">
			        <ul class="images">
			    
			           <li><img width="450" height="450" src="images/pic13.jpeg" alt="photo_two" /></li>
			    
			        </ul>
			    </div>
				
			</div>
        <br><br><br>
	      <footer>
	      	<p>Copyright© 2020 Medicare Marketplace Ltd.</p>
	      </footer>

	</body>
</html>
