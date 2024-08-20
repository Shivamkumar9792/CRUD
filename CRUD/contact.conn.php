<?php
   include_once "db-connection.php";
    if(isset($_POST['submit'])){

// print_r($_POST);die();//
 $firstName  =	  $_POST['first_name'];
 $lastName   =	  $_POST['last_name'];
  // print_r($last_name);die();
 $userName    =    $_POST['user_name'];
 $password    =     $_POST['password'];
 $dob       =       $_POST['birth_date'];
 $contactNumber =  $_POST['contact_number'];
 $gender		 =         $_POST['gender'];
 $createdAt     =        date('Y-m-d h:i:sa');

                           

        mysqli_query($conn,"INSERT INTO registrations (first_name,last_name,user_name,password,dob,contact_number,gender,created_at) Values ('$firstName','$lastName','$userName','$password','$dob','$contactNumber','$gender','$createdAt')") ;

         header('location:students_record.php');




      }

 ?>
