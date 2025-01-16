<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $conn->query("UPDATE items SET name='$name' WHERE id=$id");
    header('Location: view.php');
}
$result = $conn->query("SELECT * FROM items");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to KSST Item Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Edit Items</h1>
</header>
<nav>
    <a href="index.html">Home</a>
    <a href="view.php">View Items</a>
    <a href="add.php">Add Items</a>
    <a href="edit.php">Edit Items</a>
    <a href="delete.php">Delete Items</a>
</nav>
<div class="container">
    <h1>Edit an Item</h1>
    <form method="POST">
        <label for="id">Select Item:</label>
        <select id="id" name="id">
            <?php while($row = $result->fetch_assoc()) { ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
        </select><br><br>
        <label for="name">New Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <button type="submit">Edit Item</button>
    </form>
</div>
</body>
</html>
