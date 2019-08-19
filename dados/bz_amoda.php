<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('./conexao/conexao.php');

//Seleciona do bauruzito a moda
  $stmt_3 = $conn->prepare('SELECT * FROM tb_amoda_bauruzito');
  $stmt_3->execute();
  $result_3 = $stmt_3->fetchAll();