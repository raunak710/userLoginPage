<?php
include 'connect.php';

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $password = md5($password);

    $checkemail = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($checkemail);

    if ($result->num_rows > 0) {
        echo "Email already exists !!";
    } else {
        $insertquery = "INSERT INTO user(email, mobile, password) VALUES ('$email', '$mobile', '$password')";
        if ($conn->query($insertquery) === TRUE) {
            header("location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("location: home.php");
        exit();   
    } else {
        echo "Not found, incorrect email or password";
    }
}
?>
