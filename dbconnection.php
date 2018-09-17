

<?php
//this is the database connection file, that assists the user to connect to the DB
$con=mysqli_connect('localhost','root','');
if($con==true)
{
mysqli_select_db($con, 'onlineschool');
}
else
{
echo "server connection failed";
}
?> 
<?php
/*dbconnection.php ** 
