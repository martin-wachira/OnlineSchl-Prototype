<?php
$output = "";
include_once('dbconnection.php');
if(isset($_POST['search'])){
	$isbno = $_POST['isbno'];
	$query = mysqli_query($con,"SELECT * FROM lib WHERE isbno LIKE '%$isbno%'"); 

	$count = mysqli_num_rows($query);
	if($count == 0){
		$output = '<h2>No result found!</h2>';
	}else{
		while($row = mysqli_fetch_array($query)){
		    $idno = $row['idno']; 
        $isbno = $row['isbno']; 
        $course = $row['course'];  
        $title = $row['title'];    
//$output .= '<h2>'.$id.'</h2>'.'<h2>'.$fname.'<h2>';
    
           // echo "<div style=text-align:center>";

    $output .= "<tr><td>".$row['idno']."</td style=text-align:center>".
	    "<td>".$row['isbno']."</td>"."<td>".$row['course']."</td>". "<td>".$row['title']."</td>.</tr>";
            echo "<br>";
            
	 echo "<table align=center border=1 cellpadding=5 cellspacing=10 style=text-align:center><tr><th>Student Id No</th><th>Book ISBN</th><th>Course</th><th>Title</th></tr>";
            
            echo "<br/>";
			}
		}
	}
?>
<!DOCTYPE html>

<html lang="en">
    <h2 style="text-align:left"><b>Library</b></h2>
  <head>
 
    <title>Library</title>

  </head>
    <br/>
	<body style="text-align:center; color:green; margin:60px; border-style:solid; border-width:medium">
        <p>Verify using the book ISBN</p>
        
		<form method="POST" action="verify.php">
			<input type="text" name="isbno" placeholder="Verify">
            
			<input type="submit" name="search" value="Verify if Book Exists">
            <br/>
            &nbsp;
		</form>
       
		<?php 
        echo 
            $output;
        ?>
       <a href="library.php"><input type="button" Value="Go Back"></a>
       <br/>
       &nbsp;
	</body>
</html>