6<!DOCTYPE html>
<html>  
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    	<style>
	        td {
	            padding: 20px;
	           }
            th{
            	padding:20px;
            }
	        
     	</style>
     		<body>
            	<div class="container">
					<?php
					  	include_once 'db-connection.php';
						$results = mysqli_query($conn,"SELECT * FROM registrations");

					?>
						<a class = "btn btn-success"href="skumar.html">add student</a>
						<table border = "1" > 
					    	<tr>
					    	    <th> action</th>	    		
					    		<th>First Name</th>
					    		<th>Last Name</th>
					    		<th>User Name</th>
					    		<th>Password</th>
					    		<th>DOB</th>
					    		<th>Gender</th>
					    		<th>Contact Number</th>
					    		<th>Created At</th>
							</tr>
								<?php
										foreach($results as $key => $value)
										{
								?>
				
									<tr>
										<td>
											<a class="btn btn-primary" href="student-update.php?id=<?php echo $value['id']; ?>">Edit</a>
											<a class="btn btn-danger" href="student-delete.php?id= <?php echo $value['id']; ?>">Delete</a>
										</td>
										<td>
											<?php echo $value['first_name']; ?>      						 							
										</td>
										<td>
											<?php echo $value['last_name']; ?>
										</td>
										<td>
											<?php echo $value['user_name']; ?>
										</td>
										<td>
											<?php echo $value['password']; ?>
										</td>
										<td>
											<?php echo $value['dob']; ?>
										</td>
										<td>
											<?php echo $value['gender']; ?>
										</td>
										<td>
											<?php echo $value['contact_number']; ?>
										</td>
										<td>
											<?php echo $value['created_at']; ?>
										</td>

									</tr>	

										<?php
												}
										?>

						</table>
			</div>
		</body>
</html>