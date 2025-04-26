<?php
// Database connection
$host = "localhost";
$username = "root"; 
$password = "Nada-1234";    
$dbname = "cakeDB"; 

$conn = new mysqli($host, $username, $password, $dbname);

// Get POST values
$email = $_POST['email'];
$newPassword = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

// Update password
$sql = "UPDATE accounts SET password = ? WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $newPassword, $email);

if ($stmt->execute()) {
    $msg = "✅ Password has been reset successfully!";
} else {
    $msg = "❌ Failed to reset password. Please try again.";
}

$stmt->close();
$conn->close();

// Redirect to result page with message
header("Location: ../resetResult.html?msg=" . urlencode($msg));
exit();
?>
