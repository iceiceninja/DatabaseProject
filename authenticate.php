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
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost:3307", "root","","dbtest"); //Change whatever is after the colon to the port your server is running on
    if(!$conn)
    {
        echo "Failure to connect to Database\n";
    }
    $stmt = $conn->prepare("SELECT username FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
   
//     if (isset($_POST['Title']) && $_POST['Title'] !== null) {
//     $title = $_POST['Title'];
//    }else
//    {
//         $stmt = $conn->prepare("SELECT * FROM books");
//    }
    $stmt->execute();
    $result = $stmt->get_result();
    // $userDetails = array();

    if ($result->num_rows > 0) {
        // User found, do something with the result
        // header("Location: book_manager.php");
        header("Location: home.php");

    } else {
        // User not found
        echo "User not found";
        header("Location: login.php?authenticate=0");

    }
    // // Fetch each row and add it to the array
    // while ($row = $result->fetch_assoc()) {
    //     $bookDetails[] = $row;
    // }

    // // Now $bookDetails is an array containing the details of the found books

    // // Encode the array as a JSON string and include it in the URL
    // $bookDetailsJSON = json_encode($bookDetails);
    // header("Location: book_manager.php?search_result=" . urlencode($bookDetailsJSON));

    $conn->close();
?>
