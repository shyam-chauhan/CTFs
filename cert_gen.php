<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";

    // Create a dynamic HTML content
    $htmlContent = "
    <html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid tan;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
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
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='logo'>
                An Organization
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
                For successfully completing Capture The Flag</br>
                
            </div>
        </div>
    </body>
</html>";

    // Set the content type header
    header('Content-Type: text/html');

    // Output the HTML content
    echo $htmlContent;

    exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTF Certificate Generator</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
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
        }
        button {
            padding: 10px;
            background-color: tan;
            color: black;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }
    </style>
</head>
<body>

<form method="post" action="">
    <label for="name">Enter your name:</label>
    <input type="text" name="name" required>
    <button type="submit">Generate Certificate</button>
</form>

</body>
</html>
