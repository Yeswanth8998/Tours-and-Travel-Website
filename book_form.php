<?php
$connection = mysqli_connect('localhost', 'root', '', 'booking_db');

if ($connection === false) {
    die("Connection error: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $Name1 = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Address1 = $_POST['address'];
    $Location1 = $_POST['location'];
    $Guests = $_POST['guests'];
    $Arrivals = $_POST['arrivals'];
    $Leaving = $_POST['leaving'];

    // Using prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($connection, "INSERT INTO book_form (Name1, Email, Phone, Address1, Location1, Guests, Arrivals, Leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssssssss", $Name1, $Email, $Phone, $Address1, $Location1, $Guests, $Arrivals, $Leaving);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        header('location: book.php');
    } else {
        echo 'Something went wrong, try again';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo 'Something went wrong, try again';
}

// Close the connection
mysqli_close($connection);
?>
