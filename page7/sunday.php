<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunday</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<?php
function getSchedule($day) {
    $schedules = [
        "Sunday" => [
            "7:00 AM - 9:00 AM | Workout",
            "11:00 AM - 12:00 PM | Lunch",
            "1:00 PM - 3:50 PM | Coding",
            "4:00 PM - 5:00 PM | School works",
            "6:00 PM - 7:00 PM | Church",
            "8:00 PM - ONWARDS | Rest Time"
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

$day = "Sunday";
$schedule = getSchedule($day);
?>

    <div class="container">
        <h1><?php echo $day; ?> Schedule</h1>
        <div class="schedule">
            <?php echo renderSchedule($schedule); ?>
        </div>
        <a class="day-link" href="../index.php">Back to Home</a>
    </div>
</body>
</html>







