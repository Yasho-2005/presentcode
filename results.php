<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}

include 'dbconnection.php';

if (!isset($_GET['exam'])) {
    echo "<p>Invalid exam selection.</p>";
    exit();
}



// Fetch user's answers along with correct answers and questions
$query = "select exam_name, total_questions, correct_answers,wrong_answers, score from exam_results
 where user_email = ?";

$stmt = $con->prepare($query);
$stmt->bind_param("i", $user_email, $exam_name);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Results</title>
    <link rel="stylesheet" href="adminstyle.css"> <!-- Include your CSS file -->
</head>
<body>
<?php include 'user_includes/user_header.php'; ?>

<section class="main">

    <?php include 'user_includes/user_sidebar.php'; ?>
    <h2>Exam Results</h2>
    <table border="1">
        <tr>
            <th>Exam Name</th>
            <th>Total Questions</th>
            <th>Correct Answers</th>
            <th>Wrong Answers</th>
            <th>Score</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['exam_name']); ?></td>
                <td><?php echo $row['total_questions']; ?></td>
                <td><?php echo $row['correct_answers']; ?></td>
                <td><?php echo $row['wrong_answers']; ?></td>
                <td><?php echo $row['score']; ?>%</td>
            </tr>
        <?php endwhile; ?>
    </table>
    </section>
</body>
</html>
