<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Hotel Booking Management</title>
</head>
<body>
    <div class="container">
        <h1>Sophie Red Hotel Booking Management</h1>
        <a href="create.php" class="btn"><i class="fas fa-plus"></i> Add New Room</a>
        <table>
            <thead>
                <tr>
                    <th>Room Number</th>
                    <th>Room Type</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM rooms";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['room_number']}</td>
                            <td>{$row['room_type']}</td>
                            <td>{$row['price']}</td>
                            <td>
                                <a href='edit.php?id={$row['id']}' class='btn edit'><i class='fas fa-edit'></i> Edit</a>
                                <a href='delete.php?id={$row['id']}' class='btn delete' onclick='return confirm(\"Are you sure?\")'><i class='fas fa-trash'></i> Delete</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
