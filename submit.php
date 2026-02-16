<?php
$conn = new mysqli("localhost", "root", "", "college_form");

if ($conn->connect_error) {
    die("Database connection failed");
}

$sql = "INSERT INTO student_form VALUES (
    NULL,
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



