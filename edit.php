<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM rooms WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $room_number = $_POST['room_number'];
    $room_type = $_POST['room_type'];
    $price = $_POST['price'];

    $sql = "UPDATE rooms SET room_number = '$room_number', room_type = '$room_type', price = '$price' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Room</title>
</head>
<body>
    <div class="container">
        <h1>Edit Room</h1>
        <form action="" method="POST">
            <input type="text" name="room_number" value="<?= $row['room_number']; ?>" required>
            <input type="text" name="room_type" value="<?= $row['room_type']; ?>" required>
            <input type="number" name="price" value="<?= $row['price']; ?>" required>
            <button type="submit" name="submit" class="btn"><i class="fas fa-save"></i> Update</button>
        </form>
    </div>
</body>
</html>
