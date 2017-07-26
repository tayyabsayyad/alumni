<!DOCTYPE html>
<html>
<head>
<head>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>	


   <meta charset="utf-8">
 </head>

  <body>    
	<a href="Homee.php" style="text-decoration:none">
	<div class="heads">
		<img id="logo" src="logo1.png">
		<h1>ALUMINI</h1>
	        <p>Don Bosco Institute of Technology, Kurla</p>
		<br>
		</a>
	</div> 
	

	<br>
	<div class="nav nav-tabs">
		<div class="container">
		        <ul class="pull-right nav nav-pills">
					<li><a href="itweb.php">Home</a></li>
        			<li><a href="about.php">About DBIT</a></li>
	  				<li><a href="contactus.php">Contact Us</a></li>
                </ul>
      		</div>
    	</div>
<br>

<div class="container">
		<center>
		<a href="https://www.google.co.in/maps/place/Don+Bosco+Institute+Of+Technology/@19.0813686,72.8869326,17z/data=!3m1!4b1!4m2!3m1!1s0x3be7c8866a456c9f:0x8d1745d15baac575">
		<img src="donbosco.png" height="20%" width="70%"></a>
		</center>
	</div><br><br>
	<br><br>
    	
<div class="container pages">
	<div class="row">
		<div class="col-md-6"> 
			<div class="des">
				<div class="row">
					<h2 style="color:white">&nbsp;Enter Details</h2>
				</div>
			</div>
        		<br>
			<form class="form-horizontal" role="form" action="contactus.php" method="post" >
            			<div class="form-group">
					<label class="control-label col-sm-2" for="user" style="font-size:15px;color:#131339">Name:</label>
						<div class="col-sm-10">
							<input style="width:350px" type="text" class="form-control" id="name" name="uname" placeholder="Enter name" required>
						</div>
     
            			</div>
           			<div class="form-group">
					<label class="control-label col-sm-2" for="email" style="font-size:15px;color:#131339">Email ID:</label>
						<div class="col-sm-10">
							<input style="width:350px" type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
						</div>
				</div>
            
            
            			<div class="form-group">
					<label class="control-label col-sm-2" for="contact" style="font-size:15px;color:#131339">Phone no:</label>
						<div class="col-sm-10">
							<input style="width:200px" type="tel" class="form-control" id="phone" name="phone" placeholder="Enter contact no.">
						</div>
				</div>
           
            
            			<div class="form-group">
					<label class="control-label col-sm-2" for="company" style="font-size:15px;color:#131339">Institute/<br>Company:</label>
						<div class="col-sm-10">
							<input style="width:350px" type="text" class="form-control" id="comp" name="comp" placeholder="Company name">
						</div>
				</div>
            
            
            			<div class="form-group">
					<label class="control-label col-sm-2" for="site" style="font-size:15px;color:#131339">Website:</label>
						<div class="col-sm-10">
							<input style="width:350px" type="url" class="form-control" id="website" name="website" placeholder="Website/url">
						</div>
				</div>
            
            			 <div class="form-group">
  					<label class="control-label col-sm-2" for="query" style="font-size:15px;color:#131339">Query:</label>
                 				<div class="col-sm-10">
                     					<textarea class="form-control" rows="5" id="query" style="width:350px" name="query"></textarea>
                     				</div>
				</div>
                        
	   			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10" style="color:#131339">
						<button style="width:300px;color:white" type="submit" class="btn btn-lg btn-primary btn-block" >Submit</button>
					</div>
				</div>
				</form>
		</div> 
		<div class="col-md-0">
    		</div>
    
   	<div class="col-md-6">
		<div class="des">
			<div class="row">
				<h2 style="color:white">&nbsp;Contact Us</h2>
            		</div>
		</div>
        	<h3>Don Bosco Institute of Technology</h3>
		<h4>Mumbai University</h4>
		<p>
           		 Premier Automobiles Road, Opp. Fiat Company Kurla West, 
            		 Amar Nagar,<br> Vidyavihar Society, Kurla, Mumbai,<br>
           		 Maharashtra 400 070<br>  <br>Telephone: 022 2504 2018
			<br>        
			Visit: <a href="http://www.dbit.in">www.dbit.in</a>
			<br>
			Timings: 9AM-5PM 
		</p>
        
		
	</div>
	</div>
</div> 
<div class="panel panel-default panel-footer" style="background-color:#131339; color:white">
	<p align="center" style="color:white"> CopyRight &copy; 2016 DBIT. Don Bosco Institute of Technology.</p>
    </div>
</body>
</html>