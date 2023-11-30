<?php
    // $title = $_POST['Title'];
    // $author = $_POST['Author'];
    // $isbn = $_POST['ISBN'];
    // $genre = $_POST['Genre'];
    // $copy = $_POST['Copy'];
    // $available = $_POST['Available'];
    // $location =  $_POST['Location'];
    // $available = strtolower($available);
    // $available = ($available == "yes" || $available == "true" || $available == "1") ? 1 : 0;
    
    $conn = mysqli_connect("localhost:3307", "root","","dbtest"); //Change whatever is after the colon to the port your server is running on
    if(!$conn)
    {
        echo "Failure to connect to Database\n";
    }
   if (isset($_POST['Title']) && $_POST['Title'] !== null) {
    $title = $_POST['Title'];
    $stmt = $conn->prepare("SELECT * FROM books WHERE title = ?");
    $stmt->bind_param("s", $title);
   }else
   {
        $stmt = $conn->prepare("SELECT * FROM books");
   }
    $stmt->execute();
    $result = $stmt->get_result();
    $bookDetails = array();

    // Fetch each row and add it to the array
    while ($row = $result->fetch_assoc()) {
        $bookDetails[] = $row;
    }

    // Now $bookDetails is an array containing the details of the found books

    // Encode the array as a JSON string and include it in the URL
    $bookDetailsJSON = json_encode($bookDetails);
    header("Location: book_manager.php?search_result=" . urlencode($bookDetailsJSON));

    // $result=$stmt->get_result();
    // if($result)
    // {
    //     while($row = $result->fetch_assoc())
    //     {
    //         printf("Title: [%s], \n Author [%s], \n ISBN [%s]\n", 
    //                 $row["Title"], $row["Author"], $row["ISBN"]);
    //     }
    //     $result->free();
    // } 
    // header("Location: book_manager.php?updateSuccess=1");

    $conn->close();
?>
