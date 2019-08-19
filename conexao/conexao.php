<?php

header('Content-Type: text/html; charset=utf-8');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try {
  $conn = new PDO('mysql:host=localhost;dbname=db_cardapio', 'root','');
  $conn->exec("SET CHARACTER SET utf8"); 
 
  
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}