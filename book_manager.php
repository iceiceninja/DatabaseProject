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
    #update{
      border: 1px grey solid;
      background: grey;
      color: white;
    }
</style>
<body>
  <div id="result-view">
    <?php
      if (isset($_GET['addSuccess']) && $_GET['addSuccess'] == 1) {
        echo 'Book has been added!';
      }
      if (isset($_GET['updateSuccess']) && $_GET['updateSuccess'] == 1) {
        echo 'Book has been Updated!';
      }
  ?>
  </div>
  <br>

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
      <div id="update">
        Enter in ISBN of Book you wish to alter: <br>
        ISBN:   <input type="text" name="ISBN"><br>
      </div>
      Enter in attributes you wish to change: <br>
       Title:    <input type="text" name="Title"><br>
        Author:   <input type="text" name="Author"><br>
        Genre:   <input type="text" name="Genre"><br>
        Copy:   <input type="text" name="Copy"><br>
        Available:   <input type="text" name="Available"> (You can type yes or no, true or false)<br>
        Location:   <input type="text" name="Location"><br>
        <input type="submit" value="Submit">
    </form>
  </div>
  <div class="form-section">
    <h2> Delete Book </h2>
    <form action="deleteBook.php" method="post">
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
    <h2> Search Book </h2>
    You only need to fill in one input to search
    <form action="searchBook.php" method="post">
      
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

    <!-- <div id="operation-results">
      Here is where we can display the results of whatever operation was done (for everything besides search we can just do a message saying "Done!" or something)
    </div> -->
</body>
</html>