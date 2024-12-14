<?php
session_start();
include('config.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            echo "success"; 
        } else {
            echo "Password salah!"; 
        }
    } else {
        echo "Username tidak ditemukan!"; 
    }
}
?>
