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
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
      if (isset($_GET['deleteSuccess']) && $_GET['deleteSuccess'] == 1) {
        echo 'Book has been DELETED!';
      }
      if (isset($_GET['search_result'])) {
        echo 'Search results at bottom of page!';
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
        ISBN:   <input type="text" name="ISBN"><br>
        <input type="submit" value="Submit">
    </form>
  </div>
  <div class="form-section">
    <h2> Search Book </h2>
    <form action="searchBook.php" method="post">
        Title:    <input type="text" name="Title"><br>
        <input type="submit" value="Submit">
    </form>
  </div>
    <div class="form-section">
    <h2> Show All Books </h2>
    <form action="searchBook.php" method="post">
        <input type="submit" value="Submit">
    </form>
  </div>
<br>
<table>
    <tr>
      <th>Title</th>
      <th>Author</th>
      <th>ISBN</th>
      <th>Genre</th>
      <th>Copy</th>
      <th>Available</th>
      <th>Location</th>
    </tr>
    <?php
    if (isset($_GET['search_result'])) 
    {
       $bookDetailsJSON = urldecode($_GET['search_result']);
        $bookDetails = json_decode($bookDetailsJSON, true);
        foreach ($bookDetails as $book) 
        {
          echo '<tr>
          <td>'. $book['title'] . '</td>
          <td>'. $book['author'] . '</td>
          <td>'. $book['isbn'] . '</td>
          <td>'. $book['genre'] . '</td>
          <td>'. $book['copy'] . '</td>
          <td>'. $book['available'] . '</td>
          <td>'. $book['location'] . '</td>
          </tr>';
        }
    }
    ?>
  </table>
    <!-- <div id="operation-results">
      Here is where we can display the results of whatever operation was done (for everything besides search we can just do a message saying "Done!" or something)
    </div> -->
</body>
</html>