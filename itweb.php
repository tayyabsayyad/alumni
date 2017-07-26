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

<script>
$(document).ready(function(){
    
	var clickEvent = false;
	$('#myCarousel').carousel({
		interval:   1000	
	}).on('click', '.list-group li', function() {
			clickEvent = true;
			$('.list-group li').removeClass('active');
			$(this).addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.list-group').children().length -1;
			var current = $('.list-group li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.list-group li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
})

$(window).load(function() {
    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
    var itemlength = $('#myCarousel .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
	$('#myCarousel .list-group-item').outerHeight(triggerheight);
});
</script>	
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
		<br><br>

		<center>
<div class="container">

  <div class="row">
  <center>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <center>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="03.jpg" alt="3" width="460" height="345">
        <div class="carousel-caption">
          <h3><a href="http://www.dbit.in" class="linktext">Don Bosco Institute of Technology, Kurla</a> </h3>
          <p>Know about our institution </p>
        </div>
      </div>

      <div class="item">
        <img src="02.jpg" alt="2" width="460" height="345">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="05.jpg" alt="5" width="460" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        <img src="04.jpg" alt="4" width="460" height="345">
        <div class="carousel-caption">
          <h3> <a href="#" class="linktext">Know from our students</a></h3>
          <p></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
   <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
      </center>
</div>
<br>
<br>
<hr>
<br>
<div class="col-sm-3">

        <div style="background-color:#87CEEB; font-size:14px ; float:left;">
        
          <div class="login"  style="outline-style:double;outline-color:#00688B;outline-width:thick" >
          <center>
              <form class="form-signin" method="post" action="Homee.php">
                <label style="font-size:20px;color:#131339">Login</label><br>
                <!--<label for="inputEmail" class="sr-only">Username</label>-->
                <input name="user"  style="margin-top:5px;" type="name" id="inputEmail" class="form-control" placeholder="Username" required>
                <!--<label for="inputPassword" class="sr-only">Password</label>-->
                <input  style="margin-top:5px;" name ="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <button  style="margin-top:5px;" class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
                <input type="button" value="Register New User" onclick="window.location.href='new_user.php';" style="margin-top:5px;" class="btn btn-lg btn-primary btn-block" name="submit">
              </form>
              </center>
          </div>

            
          </div>


        </center>
        </div>
        </div>

        </div>

      
<br><br><br>
    <div class="panel panel-default panel-footer" style="background-color:#131339; color:white">
	<p align="center" style="color:white"> CopyRight &copy; 2016 DBIT. Don Bosco Institute of Technology.</p>
    </div>
</body>
</html>
