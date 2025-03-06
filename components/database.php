<?php

function Connect() {
    try {
    
        $dsn = "mysql:host=localhost;dbname=ecommerce";
        $user = "root";
        $passwd = "";
    
        $pdo = new PDO($dsn, $user, $passwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        return $pdo;
    
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}


function Select($pdo) {
    try {
        $sql = "SELECT * FROM article";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}


function Insert($email, $password, $pdo) {
    try {
        $sql = "INSERT INTO user (email, password) VALUES (?,?);";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([$email, $password]);

        return true;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

function FindBy2($pdo, $id, $champs, $table, $element) {
    try {
        $sql = "SELECT $element FROM $table WHERE $champs = ?";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}


function FindBy($pdo, $id) {
    try {
        $sql = "SELECT * FROM article WHERE id_article = ?";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}




?>