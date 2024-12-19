<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add New Room</title>
</head>
<body>
    <div class="container">
        <h1>Add New Room</h1>
        <form action="create.php" method="POST">
            <input type="text" name="room_number" placeholder="Room Number" required>
            <input type="text" name="room_type" placeholder="Room Type" required>
            <input type="number" name="price" placeholder="Price" required>
            <button type="submit" name="submit" class="btn"><i class="fas fa-save"></i> Save</button>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $room_number = $_POST['room_number'];
    $room_type = $_POST['room_type'];
    $price = $_POST['price'];

    $sql = "INSERT INTO rooms (room_number, room_type, price) VALUES ('$room_number', '$room_type', '$price')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
