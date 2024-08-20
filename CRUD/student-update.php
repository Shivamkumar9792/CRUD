<?php
	include_once 'db-connection.php';
	$id = $_GET['id'];
	//print_r($id);die();//
		$results = mysqli_query($conn,"SELECT * FROM registrations where id = $id");
	    $value = mysqli_fetch_assoc($results);
?>
		
 			 <form method = "post" action = "student-update-conn.php?id=<?php echo $value ['id'];?>"> 
                            <p><label for="first_Name">first_name:</label>
                                <input type="text" id="first_Name" name="first_name" value="<?php echo $value['first_name'];?>"></input>
                               </p>

                           <p> <label for="last_name">last_name:</label>
                                <input type="text" id="last_Name" name="last_name" value = "<?php echo $value['last_name'];?>"</input>
                                   </p>
  

                          <p>  <label for="user_name">user_name:</label>
                                <input type="email" id="user_Name" name="user_name" placeholder="name@zu.edu.jo" value = "<?php echo $value['user_name'];?>"></input>
                           </p>
      

                           <p> <label for="password">Password:</input>
                                <input type="password" id="password" name="password" value = "<?php echo $value['password'];?>"></input>
                                    
                           </p>
      

                          <p>  <label for="birth_date">Birth Date:</label>
                                <input type="date" id="birth_date" name="birth_date" value = "<?php echo $value['dob'];?>">
                             	</input>
                                   </p>
       

                           <p> <label for="contact_number">contact_number:</label>
                                <input type="tel" id="contact_Number" name="contact_number"placeholder="##########"  value ="<?php echo $value['contact_number'];?>"></input>

                                    </p>
     

                          <p>  <label for="gender">Gender:</label>
                                <select id="gender" name="gender"><br>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                 </select>
                           </p>

                            

                                <button class="btn btn-success" type = "update" name = "submit" value = "submit">update </button>
            </form>
       
    
	 	