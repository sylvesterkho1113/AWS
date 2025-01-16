<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $conn->query("INSERT INTO items (name) VALUES ('$name')");
    header('Location: view.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Items</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Add Items</h1>
</header>
<nav>
    <a href="index.html">Home</a>
    <a href="view.php">View Items</a>
    <a href="add.php">Add Items</a>
    <a href="edit.php">Edit Items</a>
    <a href="delete.php">Delete Items</a>
</nav>
<div class="container">
    <h1>Add a New Item</h1>
    <form method="POST">
        <label for="name">Item Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <button type="submit">Add Item</button>
    </form>
</div>
</body>
</html>
