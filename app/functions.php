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



?>