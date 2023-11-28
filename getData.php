<?php
    $eid = $_GET['EID'];
    $pwd = $_GET['Password'];
    $conn = mysqli_connect("localhost:3307", "root","","dbtest"); //Change whatever is after the colon to the port your server is running on
    if(!$conn)
    {
        echo "Failure to connect to Database\n";
    }
    $sql = "SELECT Name, Salary, SSN
            FROM employee
            WHERE eid= '$eid' AND password='$pwd'";
    $result = $conn->query($sql);
    if($result)
    {
        while($row = $result->fetch_assoc())
        {
            printf("Name: [%s], \n Salary [%s], \n SSN [%s]\n", 
                    $row["Name"], $row["Salary"], $row["SSN"]);
        }
        $result->free();
    } 
    $conn->close();
?>