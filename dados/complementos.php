<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('./conexao/conexao.php');

 //Seleciona Adicionais
  $stmt_6 = $conn->prepare('SELECT * FROM tb_adicionais');
  $stmt_6->execute();
  $result_6 = $stmt_6->fetchAll();
  
  
 