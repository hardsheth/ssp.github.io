<?php

// include <dbcon class="php"></dbcon>
$server="localhost";
$username="root";
$password="";
$dbname="ssp";

$c1=$_POST['n1'];
$c2=$_POST['n2'];
$name= $_POST['fname'] ; 
$addr= $_POST['address'];
$dress= $_POST['dress'];
$desc= $_POST['descr'];
$total= $_POST['total'];
$con= mysqli_connect($server, $username, $password, $dbname);


if(isset($_POST['submit']))
{
    //  if(!empty($_POST['name'])&(!empty($_POST['address'])&(!empty($_POST['subject']))
    //  {
        
        $query= "INSERT INTO `cust`(`contact1`, `contact2`, `name`, `address`, `dress`, `description`, `totalpcs`) VALUES ('$c1','$c2','$name','$addr','$dress','$desc','$total')";

        $result = mysqli_query($con,$query);

        if($result)
        {
            echo 'Data Inserted';
        }
        
        else{
            echo 'Data Not Inserted';
        }
        
        // mysqli_free_result($result);
        mysqli_close($con);
        header('location:main.php');
    }
    
    ?>
    


?>