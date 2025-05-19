<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Schedule</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h1>My Schedule</h1>
    <div class="days-container">
    <?php
    function getDayLink($day, $path) {
        return '<a class="day-link" href="' . $path . '">' . $day . '</a>';
    }

    $days = [
        "Monday" => "./page/monday.php",
        "Tuesday" => "./page2/tuesday.php",
        "Wednesday" => "./page3/wednesday.php",
        "Thursday" => "./page4/thursday.php",
        "Friday" => "./page5/friday.php",
        "Saturday" => "./page6/saturday.php",
        "Sunday" => "./page7/sunday.php"
    ];

    foreach ($days as $day => $file) {
        echo getDayLink($day, $file);
    }
    ?>
    </div>
</body>
</html>