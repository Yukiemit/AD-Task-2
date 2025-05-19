<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wednesday</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<?php
function getSchedule($day) {
    $schedules = [
        "Wednesday" => [
            "9:00 AM - 10:50 AM | Technopreneur (FTIC)",
            "1:00 PM - 3:00 PM | Physics Laboratory (F1009)"
        ]
    ];
    return $schedules[$day] ?? [];
}

function renderSchedule($schedule) {
    $html = '';
    foreach ($schedule as $item) {
        $html .= "<p>$item</p>";
    }
    return $html;
}

$day = "Wednesday";
$schedule = getSchedule($day);
?>
        </div>
<div class="container">
        <h1><?php echo $day; ?> Schedule</h1>
        <div class="schedule">
            <?php echo renderSchedule($schedule); ?>
        </div>
        <a class="day-link" href="../index.php">Back to Home</a>
    </div>
</body>
</html>