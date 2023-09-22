<?php  
include 'connect.php';

mysqli_query($con,"delete from quizes");

$quiz_grades = mysqli_query($lms,"SELECT * FROM quiz_grades ");
while($row =mysqli_fetch_assoc($quiz_grades) ){
    $quiz = mysqli_fetch_assoc(mysqli_query($lms,"SELECT * FROM quiz where id = '{$row['quiz']}' "));
    $qui_course = $quiz['course'];
    $teacher = mysqli_fetch_assoc(mysqli_query($lms,"SELECT * FROM course where id = '$qui_course' "))['shortname'];
    $insert = mysqli_query($con,"INSERT INTO quizes (quizid,courseid,rating,teacher) VALUES ('{$row['quiz']}','$qui_course','{$row['grade']}','$teacher') ");

}

?>