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
          <div class="bio-graph-heading" style="position: relative;height:250px; align-items: center;">
             <p style="position: absolute; top:35%; left:30%;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</p>
              <p style="position: absolute;top:55%; left:38%;">ARIJA BOOKSTORE</p>
          </div>
          <div class="panel-body bio-graph-info" style="margin-top:30px;">
              <p style="font-size:15px;">
              Welcome to Arija Bookstore, your number one source for all things books. We're dedicated to providing you
           the very best of books, with an emphasis on customer satisfaction.Founded in 2022 by ANNA FRAY, Arija Bookstore has come a long way from its 
           beginnings in Lucado Street, Nairobi. When ANNA FRAY first started out, her passion for books drove her to start
            their own business.We hope you enjoy our products as much as we enjoy offering them to you. If you have any 
            questions or comments, please don't hesitate to contact us.
              </p>
           </div>
      </div>
      
  </div>
</div>
</div>



</body>
</html>