<?php

  

    function database(){
        $username = "root";
        $password = "";
        $host = "localhost";
        $database = "server";

        return new PDO("mysql:host=$host; dbname=$database;", $username,$password);
    }

    function addMessage($name, $message){
        $db = database();
        $sql = "INSERT INTO messages(name, message) VALUES (?,?)";
        $stmt = $db->prepare($sql);
        $stmt->execute(array($name, $message));
        $db = null;
    }
    
    function retrieveMessages(){
        $db = database();
        $sql = "SELECT * FROM messages";
        $rows = $db->prepare($sql);
        $rows->execute();
        $row = $rows->fetchAll(PDO::FETCH_ASSOC);
        $db = null;
        echo json_encode(array("messages"=>$row));
    }
?>