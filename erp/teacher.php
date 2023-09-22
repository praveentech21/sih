<?php  
include 'connect.php';

$teachers = mysqli_query($con,"SELECT AVG(`rating`) FROM `quizes` WHERE `courseid` = $");



?>