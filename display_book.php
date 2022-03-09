<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arija Bookstore</title>

    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
    <body>
    <h2 class="text-center">ARIJA BOOKSTORE</h2>
    <br>
 
    <?php
    include("db_connection.php");
 
    // $search = $_REQUEST["search"];
    $search = isset($_GET['search']) ? $_GET['search'] : '';

 
    $query = "select ISBN,Title,Author,Edition,Publication from book_info where title like '%$search%'";
     //search with a book name in the table book_info
    $result = mysqli_query($link,$query);
 
    if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
 
    {
    ?>
 
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <th> ISBN </th>
            <th> Title </th>
            <th> Author </th>
            <th> Edition </th>
            <th> Publication </th>
            <th>Borrow</th>
        </tr>
 
        <?php while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?php echo $row["ISBN"];?> </td>
            <td><?php echo $row["Title"];?> </td>
            <td><?php echo $row["Author"];?> </td>
            <td><?php echo $row["Edition"];?> </td>
            <td><?php echo $row["Publication"];?> </td>
            <td ><button>Borrow</button></td>
        </tr>
        <?php
        }
        }
        else
        echo "<center>No books found in the library by the name $search </center>" ;
        ?>   
    </table>
    </body>
</html>