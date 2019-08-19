<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('./conexao/conexao.php');

//Seleciona do bauruzito
 //Seleciona do bauruzito
  $stmt_2 = $conn->prepare('SELECT * FROM tb_bauruzito');
  $stmt_2->execute(); 
  $result_2 = $stmt_2->fetchAll();