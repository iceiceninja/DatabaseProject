<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .form-section{
    border: 1px solid black;
  }
   a
    {
        text-decoration:none; 
        background-color:lime;
    }
    a:hover
    {
        background:green;
    }
    #result-view
    {
      background-color: blue;
      color:white;
    }
</style>
<body>
  <a href="home.php">Home</a>
  <h1>Book Manager</h1>
  <div class="form-section">
    <h2> Add Book </h2>
    <form action="addBook.php" method="post">
        Title:    <input type="text" name="Title"><br>
        Author:   <input type="text" name="Author"><br>
        ISBN:   <input type="text" name="ISBN"><br>
        Genre:   <input type="text" name="Genre"><br>
        Copy:   <input type="text" name="Copy"><br>
        Available:   <input type="text" name="Available"> (You can type yes or no, true or false)<br>
        Location:   <input type="text" name="Location"><br>
        <input type="submit" value="Submit">
    </form>
  </div>
  <div class="form-section">
    <h2> Update Book </h2>
    <form action="updateBook.php" method="post">
        Title:    <input type="text" name="Title"><br>
        Author:   <input type="text" name="Author"><br>
        <input type="submit" value="Submit">
    </form>
  </div>
  <div class="form-section">
    <h2> Delete Book </h2>
    <form action="deleteBook.php" method="post">
        Title:    <input type="text" name="Title"><br>
        Author:   <input type="text" name="Author"><br>
        <input type="submit" value="Submit">
    </form>
  </div>
  <div class="form-section">
    <h2> Search Book </h2>
    <form action="searchBook.php" method="post">
        Title:    <input type="text" name="Title"><br>
        Author:   <input type="text" name="Author"><br>
        <input type="submit" value="Submit">
    </form>
  </div>
  <?php
      if (isset($_GET['addSuccess']) && $_GET['addSuccess'] == 1) {
        echo '<br><div id="result-view">Book has been added!</div><br>';
      }
  ?>
    <!-- <div id="operation-results">
      Here is where we can display the results of whatever operation was done (for everything besides search we can just do a message saying "Done!" or something)
    </div> -->
</body>
</html>