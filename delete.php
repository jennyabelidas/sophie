<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$sql = "DELETE FROM rooms WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
