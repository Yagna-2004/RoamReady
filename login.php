<?php 
session_start(); 
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } elseif (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE user_name=?");
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($pass, $user['password'])) {
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['id'] = $user['id'];
            header("Location: home.php");
            exit();
        } else {
            header("Location: index.php?error=Incorrect User name or password");
            exit();
        }
    }
}

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
     <form action="login.php" method="post">
        <h2 style="color: black">LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
        <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>
