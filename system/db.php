<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=securitylab", "root", "");
} catch ( PDOException $e ){
     echo $e->getMessage();
}
?>