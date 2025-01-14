<?php
include 'connection.php';
$result = $conn->query("SELECT * FROM items");
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Items</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>View Items</h1>
</header>
<nav>
    <a href="index.php">Home</a>
    <a href="view.php">View Items</a>
    <a href="add.php">Add Items</a>
    <a href="edit.php">Edit Items</a>
    <a href="delete.php">Delete Items</a>
</nav>
<div class="container">
    <h1>View Items List</h1>
    <ul>
        <?php while($row = $result->fetch_assoc()) { ?>
            <li><?php echo $row['name']; ?></li>
        <?php } ?>
    </ul>
</div>
</body>
</html>
