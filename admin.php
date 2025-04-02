<?php
include 'database.php';

$sql = "SELECT * FROM shoe_requests ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Shoe Requests</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #333; color: white; }
    </style>
</head>
<body>

    <h2>Shoe Stock Requests</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Shoe Name</th>
            <th>Shoe ID</th>
            <th>Description</th>
            <th>Submitted At</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['shoe_name']; ?></td>
            <td><?php echo $row['shoe_id']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['submitted_at']; ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>

<?php $conn->close(); ?>
