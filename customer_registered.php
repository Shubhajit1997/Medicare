<?php
		
		$servername="sql201.epizy.com";
        $username="epiz_25758963";
        $password="aTKXdcv6Nn6Uba";
        $dbname="epiz_25758963_medicare";

        $link=mysqli_connect($servername,$username,$password,$dbname);
        if(!$link)
        {
            echo "Connection error";
        }
        else
        {
        	$Password 				=$_POST['password'];	// BELOW 3 LINES ARE CHANGED
			$Cpassword 				=$_POST['cpassword'];

			if($Password==$Cpassword){

	            $query="INSERT INTO customerdetails(first_nm,last_nm,gender,phone,email,password,cpassword,state,city,pincode,address)
	                    VALUES (
	                            '$_POST[first_nm]',
	                            '$_POST[last_nm]',
	                            '$_POST[gender]',
	                            '$_POST[phone]',
	                            '$_POST[email]',
	                            '$_POST[password]',
	                            '$_POST[cpassword]',
	                            '$_POST[state]',
	                            '$_POST[city]',
	                            '$_POST[pincode]',
	                            '$_POST[address]'
							)";
							
				mysqli_query($link,$query);
				echo "";
			}
			else{
				/*echo 'Password and confirm password must be same'*/
				header("Location: register.php");
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
					<br><br><br><br>
					<h2>Congratulations You are successfully registered ! Please Log In to purchase medicine.</h2>
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

