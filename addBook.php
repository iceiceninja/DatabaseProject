<?php
    $title = $_POST['Title'];
    $author = $_POST['Author'];
    $isbn = $_POST['ISBN'];
    $genre = $_POST['Genre'];
    $copy = $_POST['Copy'];
    $available = $_POST['Available'];
    $location =  $_POST['Location'];
    $available = strtolower($available);
    $available = ($available == "yes" || $available == "true" || $available == "1") ? 1 : 0;

    $conn = mysqli_connect("localhost:3307", "root","","dbtest"); //Change whatever is after the colon to the port your server is running on
    if(!$conn)
    {
        echo "Failure to connect to Database\n";
    }
    $sql = "INSERT INTO books (title, author, isbn, genre, copy, available, location) VALUES ('$title','$author'
    ,'$isbn','$genre','$copy', '$available', '$location')";

    $stmt = $conn->prepare("INSERT INTO books (title, author, isbn, genre, copy, available, location) 
    VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiis", $title, $author, $isbn, $genre,$copy,$available,$location);
    $stmt->execute();
    $result=$stmt->get_result();
    // $result = $conn->query($sql);
    if($result)
    // if($stmt)
    {
        while($row = $result->fetch_assoc())
        {
            printf("Title: [%s], \n Author [%s], \n ISBN [%s]\n", 
                    $row["Title"], $row["Author"], $row["ISBN"]);
        }
        $result->free();
    } 
    header("Location: book_manager.php?addSuccess=1");

    $conn->close();
?>
