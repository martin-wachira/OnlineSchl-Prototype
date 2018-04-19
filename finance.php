
<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection,"onlineschool");
if (isset($_GET['submit'])) {
$s_id = $_GET['s_id'];
$fname = $_GET['fname'];
$sname = $_GET['sname'];
$id = $_GET['id'];
$courses = $_GET['courses'];
$skill = $_GET['skill'];
$query = mysqli_query($connection, "update student_register set
fname='$fname', sname='$sname', id='$id', 
courses='$courses' where s_id='$s_id'");
}
$query = mysqli_query($connection, "select * from student_register");
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href='finance.php?update={$row['s_id']}'>{$row['fname']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysqli_query($connection, "select * from student_register where s_id=$update");
while ($row1 = mysqli_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='s_id' value='{$row1['s_id']}' />";
echo "<br />";
echo "<label>" . "fname:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='fname' value='{$row1['fname']}' />";
echo "<br />";
echo "<label>" . "sname:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='sname' value='{$row1['sname']}' />";
echo "<br />";
echo "<label>" . "id:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='id' value='{$row1['id']}' />";
echo "<br />";
echo "<label>" . "courses:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='courses' value='{$row1['courses']}' />";
echo "<br />";
echo "<label>" . "skill:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='skill' value='{$row1['skill']}' />";
echo "<br />";
echo "<label>" . "password:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='password' value='{$row1['password']}' />";
echo "<br />";
echo "</textarea>";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style2.css" rel="stylesheet" type="text/css">
<link href="css/style2.css" rel="stylesheet" type="text/css">
</head>
<body class="body1">
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Details</h2>
</div>
<div class="divB">
<div class="divD">
<a href="index.php">Click On Menu</a>
<br/>
<br/>
<br/>
&nbsp;
</body>
<br/>
<br/>
<br/>
&nbsp;
</html>