<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css"> 
    <title>Document</title>
</head>
<body>

<?php
include 'templates/header.php';
include 'app/functions.php';

$eventId = 1; // Replace with the actual event ID you want to retrieve
$event = getEventById($pdo, $eventId);

if ($event) {
    echo "ID: " . $event->id . "<br>";
    echo "Name: " . $event->name . "<br>";
    echo "Date: " . $event->date . "<br>";
    // Display other fields as needed
} else {
    echo "No event found with ID $eventId.";
}
?>

</body>
</html>