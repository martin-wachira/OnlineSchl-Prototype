
<?php
$output = "";
include_once('dbconnection.php');
if(isset($_POST['search'])){
	$id = $_POST['id'];
	$query = mysqli_query($con,"SELECT * FROM student_register WHERE id LIKE '%$id%'"); 
//Replace table_name with your table name and `thing_to_search` with the column you want to search

	$count = mysqli_num_rows($query);
	if($count == 0){
		$output = '<h2>No result found!</h2>';
	}else{
		while($row = mysqli_fetch_array($query)){
		$fname = $row['fname']; 
        $sname = $row['sname']; 
        $id = $row['id'];  
        $radio = $row['radio'];    
//$output .= '<h2>'.$id.'</h2>'.'<h2>'.$fname.'<h2>';
    
           // echo "<div style=text-align:center>";

    $output .= "<tr><td>".$row['fname']."</tdstyle=text-align:center>".
	    "<td>".$row['sname']."</td>"."<td>".$row['id']."<td>".$row['radio']."</td>"."<td>".$row['courses']."</td>"."<td>".$row['skill']."</td>.</tr>";
            echo "<br>";
            
	 echo "<table align=center border=1 cellpadding=5 cellspacing=10 style=text-align:center><tr><th>First_Name</th><th>Second_Name</th><th>ID</th><th>MODE</th><th>COURSE</th><th>SKILLS</th></tr>";
            
            echo "<br/>";
			}
		}
	}
?>
<!DOCTYPE html>

<html lang="en">
    <h2 style="text-align:left"><b>Online School</b></h2>
  <head>
 
    <title>Online School</title>

  </head>
    <br/>
	<body style="text-align:center; color:green; margin:60px; border-style:solid; border-width:medium">
        <p>Use the ID no. to search if user exists!</p>
        
		<form method="POST" action="search.php">
			<input type="text" name="id" placeholder="query">
            
			<input type="submit" name="search" value="Search">
            <br/>
            &nbsp;
		</form>
       
		<?php 
        echo 
            $output;
        ?>
       <a href="index.php"><input type="button" Value="Go Back Home"></a>
       <br/>
       &nbsp;
	</body>
</html>