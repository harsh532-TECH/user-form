<?php

@include 'connect.php';

if(isset($_POST['signUp'])){
    $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Debug output
    echo "Received sign-up request with data: <br>";
    echo "First name: $firstname <br>";
    echo "Last name: $lastname <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";

    $SELECT = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $SELECT);
    
    if(mysqli_num_rows($result) > 0){
        echo "Email address already exists";
    } else {
        $Insert = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
        if(mysqli_query($conn, $Insert)){
            echo "Registration successful! Redirecting to index.php...";
            header("Location: index.php");
            exit(); // Ensure no further code is executed after redirect
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

if(isset($_POST['signIn'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Debug output
    echo "Received sign-in request with data: <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";

    $SQL = "SELECT * FROM user WHERE email ='$email' AND password ='$password'";
    $result = mysqli_query($conn, $SQL);
    
    if(mysqli_num_rows($result) > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    } else {
        echo "Incorrect email or password!";
    }
}
?>

