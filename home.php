<?php
    session_start();

    if (!isset($_SESSION["user"])) {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Hi! <?php echo htmlspecialchars($_SESSION["user"]); ?></h1>
        <form action="home.php" method="post">
            <input type="submit" name="logout" value="Logout" class="button">
        </form>
    </div>
</body>
</html>

<?php 
    if (isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
    }
?>