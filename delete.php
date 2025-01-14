<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $conn->query("DELETE FROM items WHERE id=$id");
    header('Location: view.php');
}
$result = $conn->query("SELECT * FROM items");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Items</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Delete Items</h1>
</header>
<nav>
    <a href="index.php">Home</a>
    <a href="view.php">View Items</a>
    <a href="add.php">Add Items</a>
    <a href="edit.php">Edit Items</a>
    <a href="delete.php">Delete Items</a>
</nav>
<div class="container">
    <h1>Delete an Item</h1>
    <form method="POST">
        <label for="id">Select Item:</label>
        <select id="id" name="id">
            <?php while($row = $result->fetch_assoc()) { ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
        </select><br><br>
        <button type="submit">Delete Item</button>
    </form>
</div>
</body>
</html>