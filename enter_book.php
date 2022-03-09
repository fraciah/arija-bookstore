<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arija Bookstore</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" crossorigin="anonymous">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="assets/urembo.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    <h1 class="text-center"style="padding:15px;">ARIJA BOOKSTORE</h1>
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
            <form action="insert_books.php" method="post">
                <table border="2" cellpadding="5" cellspacing="5">
                    <tr>
                    <td> Enter ISBN :</td>
                    <td> <input type="text" name="isbn" size="48" required> </td>
                    </tr>
                    <tr>
                    <td> Enter Title :</td>
                    <td> <input type="text" name="title" size="48" required> </td>
                    </tr>
                    <tr>
                    <td> Enter Author :</td>
                    <td> <input type="text" name="author" size="48" required> </td>
                    </tr>
                    <tr>
                    <td> Enter Edition :</td>
                    <td> <input type="text" name="edition" size="48" required> </td>
                    </tr>
                    <tr>
                    <td> Enter Publication: </td>
                    <td> <input type="text" name="publication" size="48" required> </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                    </td>
                    </tr>
                </table>
            </form>
            </div>
	</div>
	

      </div>
  </div>


</div>
</div>
</body>
</html>