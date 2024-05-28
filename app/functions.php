<?php
require_once 'config/database.php';

function getAllEvents() {
    global $pdo;

    try{
        //prepare the SQL statement
        $sql = "SELECT id, name FROM users";
        $query = $pdo->prepare($sql);

        //Execute the statement
        $query->execute();

        //Fetch all usernames
        $users = $query->fetchAll(PDO::FETCH_ASSOC);

        echo '<pre>';
        var_dump($users);
        echo '</pre>';
        return $users;
    }
    catch (\PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

function getEventById($pdo, $eventId) {
    $sql = 'SELECT * FROM events WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $eventId]);
    return $stmt->fetch();
}

function getEventsBySport($pdo) {
    $stmt = $pdo->prepare('
        SELECT e.id, e.event_name, s.sport_name 
        FROM event e
        JOIN sport s ON e.sport_id = s.id
        GROUP BY s.id
    ');
    $stmt->execute();
    return $stmt->fetchAll();
}

function getLastEventBySport($sportName) {
    global $pdo;

    try {
        $sql = '
            SELECT e.* 
            FROM events e
            JOIN sports s ON e.sport_id = s.id
            WHERE s.name = :name
            ORDER BY e.id DESC
            LIMIT 1
        ';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $sportName]);
        return $stmt->fetch(PDO::FETCH_OBJ);  // Fetch as object
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
}

function getLastEventIdBySport($sportName) {
    $lastEvent = getLastEventBySport($sportName);
    return $lastEvent ? $lastEvent->id : null;
}

?>