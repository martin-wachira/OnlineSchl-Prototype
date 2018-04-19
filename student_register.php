<?php
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $sname=$_POST['sname'];
    $id=$_POST['id'];
    $radio=$_POST['radio'];
    $courses=$_POST['courses'];
    $skill=$_POST['skill'];
    $password=md5($_POST['password']);
    include_once('dbconnection.php');
    $sql="INSERT INTO student_register(fname,sname,id,radio,courses,skill,password)
        VALUES('$fname','$sname','$id','$radio','$courses','$skill','$password')"
        ;
    mysqli_query($con,$sql);
    //echo"user registration successful";
	
	 echo "<script>alert('Thank you for taking time to register, Now use those details to sign in!');window.location.href='index.php';</script>"; 
   
}
?>