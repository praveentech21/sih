<?php

include 'connect.php';

$teachers = mysqli_query($con,"SELECT * FROM `quizes`group by courseid ");
while($row = mysqli_fetch_assoc($teachers)){
    $avgassment = mysqli_fetch_assoc(mysqli_query($con,"SELECT *,avg(rating) as avg FROM `quizes` where courseid = '{$row['courseid']}' "))['avg'];
    // echo $avgassment."<br>";
    $feedbackdata = mysqli_fetch_assoc(mysqli_query($con,"SELECT *, avg(q1),avg(q2), avg(q3),avg(q4),avg(q5) FROM `feedback` where course = '{$row['teacher']}' "));

    $avg=( $feedbackdata['avg(q1)']+  $feedbackdata['avg(q2)']+  $feedbackdata['avg(q3)']+  $feedbackdata['avg(q4)']+  $feedbackdata['avg(q5)'])/5;
    // echo $avg."<br>";
    // //I am Considering Student performabce as 50% and feedback as 50%
    $teacherscore = $avg/2 + $avgassment/2;
    // echo $teacherscore."<br>";
    mysqli_query($con,"UPDATE `teacher` SET `score`='$teacherscore' WHERE course = '{$row['teacher']}'");
}   



?>