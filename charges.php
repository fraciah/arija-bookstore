<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <title>Profile Page</title>
</head>
<body> -->

    <!-- Start of Nav bar -->

    <!-- <nav class="navbar navbar-expand-md bg-success navbar-dark my-2"> -->

        <!-- Brand -->

        <!-- <a class="navbar-brand" href="#">ARIJA BOOKSTORE</a> -->
      
        <!-- Toggler/collapsibe Button -->

        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button> -->
      
        <!-- Navbar links -->

        <!-- <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item text-light">
              <a class="nav-link" href="display_book.php">View available books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Return book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Charges</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Books lost</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Books borrowed</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Overdue </a>
            </li>
          </ul>
        </div>
      </nav> -->

    <!-- End of Nav Bar -->
<!--     
    <a href="user_page.php">Back to user page</a>
</body>
</html> -->

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
    <link rel="stylesheet" href="assets/bootstrap/js/jquery-3.4.0.js">
    <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.js">
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
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
              </a>
              <h1><?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
          </div>

          <ul >
              <li class="active"><a href="user_page.php"> <i class="fa fa-home fa-fw"></i>Home</a></li>
              <li class="active"><a href="profile_page.php"> <i class="fa fa-user"></i> Profile</a></li>
              <li class="active"><a href="borrow_book.php"> <i class="fa fa-book"></i>Borrow books</a></li>
              <li class="active"><a href="charges.php"> <i class="fas fa-coins"></i>Charges</a></li>
              <li class="active"><a href="reset_password.php"><i class="fa fa-pencil fa-fw"></i>Reset Password</a></li>
              <li class="active"><a href="logout.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
          </ul>
      </div>
  </div>
  
</div>
</div>



</body>
</html>