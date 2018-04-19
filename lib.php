<?php
//this file contains the lib.php files that assists the user to dumb the details captured in the library section to the DB.
if(isset($_POST['submit']))
{
    $idno=$_POST['idno'];
    $isbno=$_POST['isbno'];
    $course=$_POST['course'];
    $title=$_POST['title'];
   
    include_once('dbconnection.php');
    $sql="INSERT INTO lib(idno,isbno,course,title)
        VALUES('$idno','$isbno','$course','$title')"
        ;
    mysqli_query($con,$sql);
 

 echo "<script>alert('You will get the book if it is available!');window.location.href='library.php';</script>"; 
    
}

?>


