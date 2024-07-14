<?php
session_start();
include('connect.php');

if (!isset($_SESSION['email'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
        Hello  
        <?php
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
            while ($row = mysqli_fetch_array($query)) {
                echo $row['firstname'] . ' ' . $row['lastname'];
            }
        }
        ?>
        </p>
    </div>
    <h1>Your data is safe!</h1>
</body>
</html>

