<?php
   include_once "db-connection.php";
   $id = $_GET['id'];

     if(isset($_POST['submit'])){
    //  print_r($_POST);die();

          $firstName  =	  $_POST['first_name'];
          $lastName   =	  $_POST['last_name'];
          $userName    =    $_POST['user_name'];
          $password    =     $_POST['password'];
          $dob       =       $_POST['birth_date'];
          $contactNumber =  $_POST['contact_number'];
          $gender		 =         $_POST['gender'];
          $createdAt     =        date('Y-m-d h:i:sa');

          //  print_r($firstName);die();

           mysqli_query($conn,"UPDATE registrations SET  
          first_name  =    '$firstName',
          last_name   =    '$lastName',
          user_name    =    '$userName',
          password    =    '$password',
          dob      =       '$dob',
         contact_number =  '$contactNumber',
          gender    =       '$gender' 
          WHERE id = $id");
          header('location: students_record.php');
               }   
?>    