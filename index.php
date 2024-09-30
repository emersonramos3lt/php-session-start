<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="container">
        <form action="index.php" method="post">
            <div class="user">
            <i class="fa-solid fa-circle-user"></i>
            <label for="user">User</label>
            </div>

            <input type="text" name="user" placeholder="Your username" class="text">
            <input type="submit" name="login" value="Login" class="button">
        </form>
    </div>

</body>
</html>

<?php
    if(isset($_POST["login"])) {
        if (!empty($_POST["user"])) {
            $user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);

            $_SESSION["user"] = $user;

            header("Location: home.php");
            exit;
        } else {
            echo '<span class="span">Missing username</span>';
        }
    }
?>