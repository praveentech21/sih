<?php
include 'connect.php';
session_start();
if (!isset($_SESSION['student'])) {
    header('location:login.php');
}
if(isset($_GET['subject']) ){
    $subject = $_GET['subject'];
}
else{
    header('location:feedback.php');
}


$student = $_SESSION['student'];

if (isset($_POST['submit'])) {
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    if(mysqli_num_rows(mysqli_query($con,"select * from feedback where username = '$student' and course = '$subject'"))>0){
        echo "<script>alert('you have already submitted your feedback!');</script>";
        header("location:feedback.php");
    }
    $insert = mysqli_query($con, "INSERT INTO feedback (`username`,`course`,q1,q2,q3,q4,q5) VALUES ('$student','$subject','$q1','$q2','$q3','$q4','$q5')");
    if ($insert) {
        echo "<script>alert('Thanks you for your feedback!');</script>";
        header("location:index.php");
    } else {
        echo "<script>alert('Something went wrong!');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
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

        .feedback-form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            padding: 20px;
            max-width: 400px;
        }

        .feedback-form h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .question {
            margin-bottom: 20px;
        }

        .question label {
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }

        .dropdown {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            color: #333;
        }

        /* Style submit button */
        .submit-button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Feedback Form</h1>
    <form action="#" method="post">
    <div class="feedback-form">
        <h2>Please provide your feedback:</h2>
        
        <!-- Question 1 -->
        <div class="question">
            <label for="q1">Question 1: How was the content?</label>
            <select required class="dropdown" id="q1" name="q1">
            <option value="">Give Your Feed Back</option>
            <option value=5>Excellent</option>
                <option value=4>VeryGood</option>
                <option value=3>Good</option>
                <option value=2>Average</option>
                <option value=1>Bad</option>
            </select>
        </div>
        
        <!-- Question 2 -->
        <div class="question">
            <label for="q2">Question 2: Was it informative?</label>
            <select class="dropdown" id="q2" name="q2">
            <option value="">Give Your Feed Back</option>
               <option value=5>Excellent</option>
                <option value=4>VeryGood</option>
                <option value=3>Good</option>
                <option value=2>Average</option>
                <option value=1>Bad</option>
            </select>
        </div>
        
        <!-- Question 3 -->
        <div class="question">
            <label for="q3">Question 3: How was the presentation?</label>
            <select class="dropdown" id="q3" name="q3">
            <option value="">Give Your Feed Back</option>
                <option value=5>Excellent</option>
                <option value=4>VeryGood</option>
                <option value=3>Good</option>
                <option value=2>Average</option>
                <option value=1>Bad</option>
            </select>
        </div>
        
        <!-- Question 4 -->
        <div class="question">
            <label for="q4">Question 4: Was it engaging?</label>
            <select class="dropdown" id="q4" name="q4">
            <option value="">Give Your Feed Back</option>
               <option value=5>Excellent</option>
                <option value=4>VeryGood</option>
                <option value=3>Good</option>
                <option value=2>Average</option>
                <option value=1>Bad</option>
            </select>
        </div>
        
        <!-- Question 5 -->
        <div class="question">
            <label for="q5">Question 5: Overall satisfaction?</label>
            <select class="dropdown" id="q5" name="q5">
            <option value="">Give Your Feed Back</option>
               <option value=5>Excellent</option>
                <option value=4>VeryGood</option>
                <option value=3>Good</option>
                <option value=2>Average</option>
                <option value=1>Bad</option>
            </select>
        </div>
        
        <!-- Submit button -->
        <button class="submit-button" name="submit" type="submit">Submit Feedback</button>
    </div>
    </form>
</body>
</
