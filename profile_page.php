<?php
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
    
</head>
<body>
    <div class="text-center" style="padding:20px;">
        <h1>ARIJA BOOKSTORE</h1>
    </div>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
              <li class="active"><a href="user_page.php"> <i class="fa fa-home fa-fw"></i>Home</a></li>
              <li class="active"><a href="profile_page.php"> <i class="fa fa-user"></i> Profile</a></li>
              <li class="active"><a href="borrow_book.php"> <i class="fa fa-book"></i>Borrow books</a></li>
              <!-- <li class="active"><a href="charges.php"> <i class="fas fa-coins"></i>Charges</a></li> -->
              <li class="active"><a href="reset_password.php"><i class="fa fa-pencil fa-fw"></i>Reset Password</a></li>
              <li class="active"><a href="logout.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
          </ul>
      </div>
  </div>
  <div class="profile-info col-md-9">
      
      <div class="panel">
          
          <div class="panel-body bio-graph-info" style="margin-top:30px;">
              <h1>User Profile</h1>
              <p>Name : <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
              <!-- <p>Password : <?php echo htmlspecialchars($_SESSION["password"]); ?></p> -->
           </div>
      </div>
      
  </div>
</div>
</div>



</body>
</html>