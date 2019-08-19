<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('./conexao/conexao.php');

 //Seleciona Refrigerante
  $stmt_5 = $conn->prepare('SELECT * FROM tb_refrigerantes');
  $stmt_5->execute();
  $result_5 = $stmt_5->fetchAll();
  
  //Seleciona Cerveja
  $stmt_4 = $conn->prepare('SELECT * FROM tb_cervejas');
  $stmt_4->execute();
  $result_4 = $stmt_4->fetchAll();