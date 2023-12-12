<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit();
}
else{
    if (isset($_GET['role'])) {
        // Retrieve the variable from the URL
        $role = urldecode($_GET['role']);
        if($role == 'admin')
        {
            header('location:admin.php');
        }
    }
    else if (isset($_GET['role'])) {
        // Retrieve the variable from the URL
        $role = urldecode($_GET['role']);
        echo "Received Variable: " . $role;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard - The Cyber Force</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add your stylesheet links here -->
    <link rel="stylesheet" type="text/css" href="path/to/your/custom.css">

    <style>
        body {
            color : white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
            margin-top : 300px;
        }

        /* Your custom styles for the dashboard go here */
        /* Add more styles as needed */

        .logout-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .logout-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body background="images/sky.jpg">
    <h1>You have successfully logged in as USER</h1>
    <h2>Your Flag is : Yb9dX5qO2Pm9azBq</h2>
    <a href="index.php" class="logout-btn">Logout</a>

    <!-- Add your script includes here -->

</body>
</html>