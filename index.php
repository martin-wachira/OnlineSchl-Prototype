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
  <body style="border-style:solid; border-width:medium; border-color:forestgreen; margin-top:20px; margin-bottom:20px">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-md-2" >
					<div class="site-logo">
						<a href="index.php" class="brand" style="color:forestgreen">Online School</a>
					</div>
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
      <div style="margin-left:100px; margin-right:700px; color:green; border-style:solid; border-width:medium">
          <div style="margin:20px">
          <h1><u>Search Student Details</u></h1>
      
              <a href="search.php"> <input style="color:orange; background-color:green" type="button" value="Search Students"></a>
              <h3><u>View Our Courses</u></h3>
              <ol>
                  <a href="#"><li>Computer Science</li></a>
                   <a href="#"><li>Business Management</li></a>
                   <a href="#"><li>Electrical engineering</li></a>
                   <a href="#"><li>Mechanical Engineering</li></a>
                   <a href="#"><li>Interior Design</li></a>
                   <a href="#"><li>Mass Communication</li></a>
              </ol>
          </div>
      </div>
      <div style="margin-top: 0px; margin-left:700px; margin-right:80px; color:green">
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
    <div style="text-align:center; border-style:solid; border-width:small; margin:80px; color: green; background-color:orange">
        <form method="post" action="student_login.php">
            <br/>
            ID No.&nbsp;<input type="text" name="id" required>&nbsp;&nbsp; &nbsp;
            Password&nbsp;<input type="password" name="password" required>
            <br/><br/>
            <input type="submit" name="submit" value="Sign In"><br/>
        </form>
        &nbsp;&nbsp; &nbsp;
    </div>
      </nav>
      &nbsp; &nbsp;&nbsp;
	<footer>
      </footer>
      <br/><br/><br/>
	
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
      