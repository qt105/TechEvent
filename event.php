<?php
require 'app/functions.php';
include 'templates/header.php';

$eventId = isset($_GET['id']) ? $_GET['id'] : die('ID de l\'activité non spécifié.');
$event = getEventById($pdo, $eventId);

if ($event) {
    echo "ID: " . $event->id . "<br>";
    echo "sport_id: " . $event->sport_id . "<br>";
    echo "Date: " . $event->date . "<br>";
    // Display other fields as needed
} else {
    echo "No event found with ID $eventId.";
}

include 'templates/footer.php';
?>