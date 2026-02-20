<?php
$conn = new mysqli("localhost", "root", "", "college_form");

if ($conn->connect_error) {
    die("Database connection failed");
}

$search = $_POST['search_value'];

$sql = "SELECT * FROM student_form 
        WHERE name='$search' 
        OR reg_no='$search'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="result-container">

<?php
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
?>

        <h1 class="title">Student Details</h1>

        <div class="details-card">

            <div class="row">
                <span>Name</span>
                <span><?php echo $row['name']; ?></span>
            </div>

            <div class="row">
                <span>Register Number</span>
                <span><?php echo $row['reg_no']; ?></span>
            </div>

            <div class="row">
                <span>Mobile</span>
                <span><?php echo $row['mobile']; ?></span>
            </div>

            <div class="row">
                <span>Address</span>
                <span><?php echo $row['address']; ?></span>
            </div>

            <div class="row">
                <span>Stream</span>
                <span><?php echo $row['stream']; ?></span>
            </div>

            <div class="row">
                <span>Joining Year</span>
                <span><?php echo $row['join_year']; ?></span>
            </div>

            <div class="row">
                <span>Passing Year</span>
                <span><?php echo $row['pass_year']; ?></span>
            </div>

        </div>

        <h2 class="subtitle">Subjects</h2>

        <table class="subject-table">
            <tr>
                <th>Subject</th>
                <th>Grade</th>
            </tr>

            <?php
            for ($i = 1; $i <= 6; $i++) {
                echo "<tr>
                        <td>{$row["sub{$i}_name"]}</td>
                        <td>{$row["sub{$i}_grade"]}</td>
                      </tr>";
            }
            ?>
        </table>

<?php
    }

} else {
    echo "<h2 style='text-align:center;'>No student found</h2>";
}

$conn->close();
?>

</div>

</body>
</html>