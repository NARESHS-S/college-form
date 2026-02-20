<?php
$conn = new mysqli("localhost", "root", "", "college_form");

if ($conn->connect_error) {
    die("Database connection failed");
}

$sql = "INSERT INTO student_form 
(reg_no, name, mobile, address, stream, join_year, pass_year,
 sub1_name, sub1_grade,
 sub2_name, sub2_grade,
 sub3_name, sub3_grade,
 sub4_name, sub4_grade,
 sub5_name, sub5_grade,
 sub6_name, sub6_grade,
 created_at)
VALUES (
    '$_POST[reg_no]',
    '$_POST[name]',
    '$_POST[mobile]',
    '$_POST[address]',
    '$_POST[stream]',
    $_POST[join_year],
    $_POST[pass_year],
    '$_POST[sub1_name]', '$_POST[sub1_grade]',
    '$_POST[sub2_name]', '$_POST[sub2_grade]',
    '$_POST[sub3_name]', '$_POST[sub3_grade]',
    '$_POST[sub4_name]', '$_POST[sub4_grade]',
    '$_POST[sub5_name]', '$_POST[sub5_grade]',
    '$_POST[sub6_name]', '$_POST[sub6_grade]',
    NOW()
)";

if ($conn->query($sql)) {
    echo "<h2>Form Submitted Successfully!</h2>";
} else {
    echo "<h2>Error submitting form</h2>";
}

$conn->close();
?>