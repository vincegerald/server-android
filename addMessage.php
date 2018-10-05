<?php 
    
    require("database.php");

    if(isset($_POST['name']) && isset($_POST['message'])){
        $name = $_POST['name'];
        $message = $_POST['message'];
        addMessage($name, $message);
        header("location:addMessage.php");
    }


?>