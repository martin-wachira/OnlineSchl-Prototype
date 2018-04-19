<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online School</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet" />
	<link href="css/prettyPhoto.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="site-logo">
						<a href="index.php" class="brand">OnePage</a>
					</div>
				</div>					  

				<div class="col-md-10">	 
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav navbar-right">
							  <li><a href="library.php">Library</a></li>
							  <li><a href="finance.php">Finance</a></li>
							
						</ul>
					</div>
					<!-- /.Navbar-collapse -->		 
				</div>
			</div>
		</div>		
	</nav>
   <div id="home">
		<div class="slider">
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators visible-xs">
						<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-slider" data-slide-to="1"></li>
						<li data-target="#carousel-slider" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
		</div>
	</div>

<br/>
<br/>&nbsp;
<nav>

 
  	<h1>Update your details</h1>
  	 <div style="margin-top: 0px; margin-left:500px; margin-right:80px; color:green">
  	<form method="post" action="student_register.php">
          <h1><u>Student portal</u></h1><br/>
              <p>New Students Registers Here!</p>
              First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" required><br/><br/>
              Second Name:&nbsp;<input type="text" name="sname" required><br/><br/>
              ID No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="number" name="id" required><br/><br/>&nbsp;
              Mode of study<br>
              <input type="radio" name="radio" value="Full-time">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Full time<br/>
              <input type="radio" name="radio" value="Part-time">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Part time<br/>
              <input type="radio" name="radio" value="Distance">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Distance <br/>
              <br/>
              &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;              
               <select name="courses">
                <option value="" >Select Course</option>
                <option value="B/S Management">Business Management</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Interior Design">Interior Design</option>
                <option value="Mass Communication">Mass Communication</option>
            </select>
              <br/>
              <br/>
              Select any special skill linked to your abilities<br/>
              <input type="checkbox" name="skill">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Musician<br/>
              <input type="checkbox" name="skill">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Dancer<br/>
              <input type="checkbox" name="skill">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Player<br/>
              <input type="checkbox" name="skill">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Stand-Up Comedian<br/>
              <input type="checkbox" name="skill">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Motivational Speaker<br/>
              Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password"><br/><br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="REGISTER"><br/>
          </form>
      </div>
      <hr>
<p>Exam Status</p>
<div style="text-align: center">
<table border="1" align="center">
	<tr>
	<th>F exams</th>
	<td>CAT 1</td>
	</tr>
	<th>Exam 2</th>
	
	<td>CAT 1</td>
	</tr>
	<th>Third Exams</th>
	
	<td>CAT 2</td>
	</tr>
</table>
</div>

  </div>
</nav>


		<div class="map">
			<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Zetech,+Nairobi,+Kenya&amp;oq=6&amp;oq=Zetech+&amp;sll=36.9607973&amp;sspn=36.9607973,36.9607973&amp;ie=UTF8&amp;hq=&amp;hnear=Zetech&amp;t=m&amp;z=13&amp;ll=-1.1531696,36.962986&amp;output=embed">
				<!--https://www.google.com/maps/place/Zetech+University/@-1.1531696,36.9607973,17z/data=!3m1!4b1!4m5!3m4!1s0x182f40b779d91613:0xcf0b7ec3c6347e01!8m2!3d-1.153175!4d36.962986

					***
				https://www.google.com/maps/place/Zetech+University/@-1.154275,36.963237,17z/data=!4m5!3m4!1s0x0:0x6b63f583559df0a7!8m2!3d-1.15318!4d36.962997?hl=en-->
			</iframe>
		</div>
	
	
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
					<div class="text-center">
						<a href="#home" class="scrollup"><i class=""></i></a>
					</div>
                    &copy; 2015 <a target="_blank" href="#" title="#">Online School</a>. All Rights Reserved.
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=OnePage
                    -->
                </div>
				
                <div class="top-bar">			
					<div class="col-lg-12">
					   <div class="social">
							<ul class="social-share">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
					   </div>
					</div>
				</div>
			</div>
		</div>
    </footer> <!--/#footer-->
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script> 
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>	
	<script src="js/main.js"></script>
  </body>
</html>