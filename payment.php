<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <link rel="stylesheet" type="text/css" href="css/style1.css" />
 
</head>
<body>
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

<h2><center>Fill Your Payment Details</center></h2>
<h4><center>***We don't share card details***</center></h4>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form name="f3" method="GET" action="payment_backup.php">
      
				<div class="row">
					<div class="col-50">
            
						<h3>Billing Address</h3>
						<label for="fname"><i class="fa fa-user"></i> Full Name</label>
						<input type="text" id="fname" name="firstname" placeholder="--Your name--" required="">
						<label for="email"><i class="fa fa-envelope"></i> Email</label>
						<input type="email" id="email" name="email" placeholder="abc@example.com" required="">
						<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
						<input type="text" id="adr" name="address" placeholder="--Your address--" required=""><br><br>
						<label for="city"><i class="fa fa-institution"></i> City</label>
						<input type="text" id="city" name="city" placeholder="--city--" required="">

						

							   <label for="state">State</label>
							   <select name="state" id="state" style="width: 100px; padding: 13px;" required="">
								<option value="free">--Select State--</option> 
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
								<option value="Arunachal Pradesh">Arunachal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chandigarh">Chandigarh</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
								<option value="Daman and Diu">Daman and Diu</option>
								<option value="Delhi">Delhi</option>
								<option value="Lakshadweep">Lakshadweep</option>
								<option value="Puducherry">Puducherry</option>
								<option value="Goa">Goa</option>
								<option value="Gujarat">Gujarat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh">Himachal Pradesh</option>
								<option value="Jammu and Kashmir">Jammu and Kashmir</option>
								<option value="Jharkhand">Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerala">Kerala</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Maharashtra">Maharashtra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalaya">Meghalaya</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland">Nagaland</option>
								<option value="Odisha">Odisha</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Sikkim">Sikkim</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Telangana">Telangana</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="Uttarakhand">Uttarakhand</option>
								<option value="West Bengal">West Bengal</option>
							  </select>
								
							
                <label for="zip">Zip Code</label>
                <input type="text" id="zip" name="zip" placeholder="--zip code--"   required="" min="100000" max="999999">
             
            </div>
          </div>
         
          <div class="col-50">
            
            <h3>Payment</h3>
           
              
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="--card-holder's name--" required="">
            <label for="ccnum">Card Number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="eg:1111-2222-3333-4444" onkeyup="check" required="">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="eg:September" required="" min="1" max=12>  <br><br>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="eg:2022" required="" min="2000" max="9999">
             
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="eg:352" required="" min="100" max="999">
              </div>
            </div>
          </div>

			</div>

		<br><br><center>	<input type="submit" name="button" value="Pay"></center>
</h2></div>
			
			
		</form>

    </div>
  </div>
</div>
</div>
				
				
			</div>
        <br><br><br>
	      <footer>
            <p>Copyright© 2020 Medicare Marketplace Ltd.</p>
	      </footer>

	</body>
</html>
