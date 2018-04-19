

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

//class DB

class DB {
	
	protected $db_name = 'onlineschool';
	protected $db_user = 'root';
	protected $db_pass = '';
	protected $db_host = 'localhost';
	
	// Open a connection to the database.

	// Make sure this is called on every page that needs to use the database.
	
	public function connect() {
	
		$connect_db = new mysqli( $this->localhost, $this->root, $this->onlineschool );
		
		if ( mysqli_connect_errno() ) {
			printf("Database Connection failure: %s\
", mysqli_connect_error());
			exit();
		}
		return true;
		
	}
}
?>
*/