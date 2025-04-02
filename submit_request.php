<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['Your-name'];
    $shoe_name = $_POST['shoe-name'];
    $shoe_id = $_POST['shoe-id'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO shoe_requests (user_name, shoe_name, shoe_id, description) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $user_name, $shoe_name, $shoe_id, $description);

    if ($stmt->execute()) {
        echo "<script>alert('Request submitted successfully!');</script>";
    } else {
        echo "<script>alert('Error submitting request! Please try again.');</script>";
    }

    $stmt->close();
    $conn->close();

    // Redirect back to form page
    echo "<script>window.location.href = 'index.php';</script>";
    exit();
}
?>
