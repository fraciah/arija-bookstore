<?php
require "db_connection.php";
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arija Bookstore</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" crossorigin="anonymous">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="assets/urembo.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    <div class="text-center" style="padding:20px;">
        <h1>ARIJA BOOKSTORE</h1>
    </div>
    
<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                  <img src="assets/images/profile.png" alt="image">
              </a>
              <h1><?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
          </div>

          <ul >
              <li class="active"><a href="admin.php"> <i class="fa fa-home fa-fw"></i>Home</a></li>
              <li class="active"><a href="enter_book.php"> <i class="fas fa-book-reader"></i>Add books</a></li>
              <li class="active"><a href="available_books.php"> <i class="fa fa-book"></i>Available books</a></li>
              <li class="active"><a href="admin_reset.php"><i class="fa fa-pencil fa-fw"></i>Reset Password</a></li>
              <li class="active"><a href=""> <i class="fa fa-user"></i> Profile</a></li>
              <li class="active"><a href="logout.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
          </ul>
      </div>
  </div>
  
  <div class="profile-info col-md-9">
      <div class="panel">

          <div class="panel-body bio-graph-info" style="margin-top:30px;">
            <h1>Available books: </h1>
           </div>

           <div class="container">
		<div class="panel panel-default">
        <table class="table table-bordered">
		         <tr> 
					<th>No</th>
					<th>BOOK</th>
                    <th>AUTHOR</th>
                    <th>EDITION</th>
                    <th>PUBLICATION</th>
				  </tr>    
					</thead>
					 <?php

					$sql = "SELECT * FROM book_info"; 	
					
					$query = mysqli_query($link, $sql);
					$counter = 1;
						while($row = mysqli_fetch_array($query)){
							$_SESSION['Title'] = $row['title'];
							
							?>
							<tbody>
							<tr>
							<td><?php echo $counter++; ?></td>
							<td><?php echo $row['title'];?></td>							
							<td><?php echo $row['author'];?></td>							
							<td><?php echo $row['edition'];?></td>							
							<td><?php echo $row['publication'];?></td>							
							<input type="hidden" class="book-name" value="<?php echo $row['title']; ?>">
							<input type="hidden" class="purpose" value="show">
							</a></td>
							</tr>
							</tbody>
							<?php }
					
					 ?>
					 </table>		 
	  </div>
	</div>
	

      </div>
  </div>


</div>
</div>



</body>
</html>