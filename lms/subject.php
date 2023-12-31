<?php
    session_start();
    if(!isset($_SESSION['student'])){
        header('location:feedback.php');
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        .subject {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            padding: 20px;
            max-width: 400px;
        }

        .subject h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .subject p {
            color: #666;
            font-size: 16px;
        }

        /* Add hover effect for subjects with light blue shadow */
        .subject:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(173, 216, 230, 0.5); /* Light blue shadow on hover */
        }

        /* Style anchor tags */
        .subject a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Subjects</h1>
    
    <div class="subject">
        <a href="form.php?subject=English">
            <h2>English</h2>
            <p>Give The Feedback To Our Respective Teachers</p>
        </a>
    </div>
    
    <div class="subject">
        <a href="form.php?subject=maths">
            <h2>Maths</h2>
            <p>Give The Feedback To Our Respective Teachers</p>
        </a>
    </div>
        
    <div class="subject">
        <a href="form.php?subject=basics    ">
            <h2>Chemistry</h2>
            <p>Give The Feedback To Our Respective Teachers</p>
        </a>
    </div>
</body>
</html>
