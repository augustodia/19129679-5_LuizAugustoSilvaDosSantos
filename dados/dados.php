<?php

  $BASE_URL = $_SERVER['HTTP_REFERER'];
  $produtos =[
    [
      'id' => 1,
      'nome' => 'Pipoca doce',
      'imagem' => $BASE_URL.'images/pipoca-doce.png',
      'preco' => '12,90',
      'descricao' => 'Uma pipoca feito com açucar e chocolate. Grãos escolhidos a dedo pelos nossos especialistas.'
    ],
    [
      'id' => 2,
      'nome' => 'Pirulito',
      'imagem' => $BASE_URL.'images/pirulito.png',
      'preco' => '4,90',
      'descricao' => 'O melhor e mais saboroso pirulito feito de creme. Edição limitada.'
    ],
    [
      'id' => 3,
      'nome' => 'Jujubas',
      'imagem' => $BASE_URL.'images/jujubas.png',
      'preco' => '8,90',
      'descricao' => 'Quem não adora jujubas, não é mesmo? Peça já um pacote de 800g e reparta com a galera!'
    ]
  ]
?>