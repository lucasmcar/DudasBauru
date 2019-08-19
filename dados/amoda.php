<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('./conexao/conexao.php');

$stmt_1 = $conn->prepare('SELECT * FROM tb_amoda');
$stmt_1->execute();
$result_1= $stmt_1->fetchAll();