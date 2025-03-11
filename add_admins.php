<?php
// Include database connection
include("db/dbconn.php");

// Check if connection is successful
if ($conn) {
    echo "Database connection successful.<br>";
    
    // SQL to add Swaroop as admin
    $sql1 = "INSERT INTO `admin` (`username`, `password`) VALUES ('Swaroop', 'uvce')";
    
    // SQL to add Adarsha as admin
    $sql2 = "INSERT INTO `admin` (`username`, `password`) VALUES ('Adarsha', 'uvce')";
    
    // Execute the first query
    if ($conn->query($sql1) === TRUE) {
        echo "Admin user 'Swaroop' added successfully.<br>";
    } else {
        echo "Error adding admin user 'Swaroop': " . $conn->error . "<br>";
    }
    
    // Execute the second query
    if ($conn->query($sql2) === TRUE) {
        echo "Admin user 'Adarsha' added successfully.<br>";
    } else {
        echo "Error adding admin user 'Adarsha': " . $conn->error . "<br>";
    }
    
    echo "<br>You can now login to the admin panel with:<br>";
    echo "Username: Swaroop or Adarsha<br>";
    echo "Password: uvce<br>";
    echo "<br><a href='admin/admin_index.php'>Go to Admin Login</a>";
} else {
    echo "Database connection failed. Please make sure your database server is running.";
}

// Close the connection
$conn->close();
?> 