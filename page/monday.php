<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monday</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
        <?php
function getSchedule($day) {
    $schedules = [
        "Monday" => [
            "7:00 AM - 8:50 AM | Mobile App Development (F1209)",
            "10:00 AM - 12:50 PM | App Development (F1203)",
            "1:00 PM - 2:50 PM | Purposive Communication (F611)"
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

$day = "Monday";
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
    </div>
</body>
</html>