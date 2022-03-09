<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert books</title>

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

        $isbn=$_POST["isbn"];
        $title=$_POST["title"];
        $author=$_POST["author"];
        $edition=$_POST["edition"];
        $publication=$_POST["publication"];
 
        //Insert query to add book details into the book_info table
        $query = "INSERT INTO `book_info`(`isbn`, `title`, `author`, `edition`, `publication`) VALUES ('$isbn','$title','$author','$edition','$publication')";
        $result = mysqli_query($link,$query);
    ?>
    <h3> Book information is inserted successfully </h3>
 
    <a href="search_book.php"> To search for the Book information click here </a>
 
</body>
</html>