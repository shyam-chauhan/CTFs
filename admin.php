<?php
session_start();
$date = date('d/m/Y');
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit();
}
else {
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["E-mail"]) ? $_POST["E-mail"] : "";
    $flag = isset($_POST["flag"]) ? $_POST["flag"] : "";

    // Create a dynamic HTML content
    $htmlContent = "
    <html>
    <head>
        <style type='text/css'>
            body, html {
                background-color : black;
                margin: 0;
                padding: 0;
            }
            body {
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            .container {
                border: 20px solid gold;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
                background-color:black;
            }
            .logo {
                color: tan;
            }

            .marquee {
                color: tan;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid gold;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
            .custom-symbol {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 10px;
                margin-top:90px;
            }

            .custom-symbol img {
                width: 120px;
                height: 100px;
            }

        </style>
    </head>
    <body background='images/bg.png'>
        <div class='container'>

            <div class='custom-symbol'>
            <img src='images/icons/logo-tcf.png' alt='Custom Symbol'>
            </div>
            <div class='logo'>
                The Cyber Force
            </div>

            <div class='marquee'>
                Certificate of Completion
            </div>

            <div class='assignment'>
                This certificate is presented to
            </div>

            <div class='person'>
                $name
            </div>

            <div class='reason'>
            For successfully Capturing The Flag on $date
            </div>
        </div>
    </body>
</html>";

    // Save name and email to a text file
    

    // Set the content type header
    header('Content-Type: text/html');

if($flag == 'Yb9dX5qO2Pm9azBqM1' || 'DvMtBVpkEyj0M2')
{
    // Output the HTML content
    echo $htmlContent;
    $data = "$name, $email, $flag\n";
    file_put_contents("entries.txt", $data, FILE_APPEND);
}
else
{
    header('location:admin.php');
}
    exit();
}
}
?>
<!-- Rest of your HTML code remains unchanged -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Penal</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            color:white;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            margin-bottom: 10px;
        }
        input {
            padding: 10px;
            margin-bottom: 20px;
            width: 300px;
            background-color: #1f1f1f;
            color :black;
        }
        button {
            padding: 10px;
            background-color: white;
            color: black;
            border: none;
            cursor: pointer;
            font-size: 18px;
            border-radius: 15px;
        }
        .container{
            border: 1px solid white;
            border-radius: 50px;
            padding: 50px;
        }
        .box{
            color:grey;
        }
    </style>
</head>
<body background="images/freak.jpg">
<div class="container">
<form method="post" action="">
   
    <label for="name">Enter your name:</label>
    <input type="text" name="name" class="box" required>
    <label for="name">Enter your E-mail:</label>
    <input type="email" name="E-mail" class="box" required>
    <label for="name">Enter Flag</label>
    <input type="text" name="flag" class="box" required>
    <button type="submit">Submit</button>
</form>
</div>
