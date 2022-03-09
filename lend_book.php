<?php 
include("db_connection.php");
session_start();
    $book = isset($_GET['title']) ? $_GET['title'] : '';
	// $book = $_SESSION['Title'];
	$name = $_SESSION['username'];
	$id = $_SESSION['id'];

	
if(isset($_POST['submit'])){
	$bid = trim($_POST['isbn']);
	$bdate = trim($_POST['borrowDate']);
	$due = trim($_POST['dueDate']);

    $select_query	= "SELECT * FROM book_info where isbn = '{$bid}' ";
    // echo $select_query;
    $bqry = mysqli_query($link,$select_query);
	$bdata = mysqli_fetch_array($bqry);

	$sql = "INSERT INTO borrow (username, id, title, borrowDate, returnDate, isbn)
             values('$name', '$id', '{$bdata['title']}', '$bdate', '$due', '$bid')";
	$query = mysqli_query($link, $sql);
	$error = false;
	if($query){
		$error = true;
	}
	else {
		echo "
		<script>
		alert('Unsuccessful');
		</script>
	";
	}

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
    
</head>
<body>
    <div class="text-center" style="padding:20px;">
        <h1>ARIJA BOOKSTORE</h1>
    </div>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
	<div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 30px">
		<div class="jumbotron login col-lg-10 col-md-11 col-sm-12 col-xs-12">
			 <?php if(isset($error)===true) { ?>
        <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Record Added Successfully!</strong>
            </div>
            <?php } ?>
			<p class="page-header" style="text-align: center">LEND BOOK</p>

			<div class="container">
				<form class="form-horizontal" role="form" action="lend_book.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="title" class="col-sm-2 control-label">BOOK TITLE</label>
						<div class="col-sm-10">
							<select class="form-control" name="isbn">
								<option>SELECT BOOK</option>
								<?php 
								$sql = "SELECT * FROM book_info";
								$query = mysqli_query($link, $sql);
								while ($row = mysqli_fetch_assoc($query)) { ?>
                                <option value="<?php echo $row['isbn'] ?>" <?php echo isset($_GET['bid']) && $_GET['bid'] == $row['isbn'] ? "selected" : "" ?>><?php echo $row['title']; ?></option>
                                <?php	} ?>
								 ?>

							</select>
						</div>		
					</div>
                    
					
					<div class="form-group">
						<label for="title" class="col-sm-2 control-label">USER NAME</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="user" id="title" value="<?php echo $name; ?>">
						</div>		
					</div>
					<div class="form-group">
						<label for="Borrow Date" class="col-sm-2 control-label">BORROW DATE</label>
						<div class="col-sm-10">
             			 <input type="date" class="form-control" name="borrowDate" id="brand">
						</div>		
					</div>
					<div class="form-group">
						<label for="Password" class="col-sm-2 control-label">RETURN DATE</label>
						<div class="col-sm-10" id="show_product">
              			<input type='date' class='form-control' name='dueDate'>
						</div>		
					</div>
					

					
					<div class="form-group ">
						<div class="col-sm-offset-2 col-sm-10 ">
							<button type="submit" class="btn btn-success col-lg-4 " name="submit">
								Submit
							</button>
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</div>


<script type="text/javascript" src="assets/bootstrap/js/jquery-3.4.0.js"></script>
<script type="text/javascript" src="assets/bootstrap/js//bootstrap.js"></script>

 <script>  
 $(document).ready(function(){  
      $('#brand').change(function(){  
           var brand_id = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{brand_id:brand_id},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });  
 });  
 </script>
</body>
</html>