<?php include_once('./dados/dados.php');?>
<div class="bg-produtos">
  <img src="./images/bg-produtos.svg" alt="">
</div>
<section class="produtos container">
  <h2 class="title">Produtos</h2>
  <div class="produtos-content">
    <?php foreach($produtos as $produto) : ?>
    <div class="produto-item">
      <div class="img">
        <img src="<?=$produto['imagem']?>" alt="<?=$produto['nome']?>">
      </div>
      <h3 class="produto-titulo"><?=$produto['nome']?></h3>
      <p class="preco"><span>R$ </span><?=$produto['preco']?></p>
      <a href="<?='http://localhost/19129679-5_LuizAugustoSilvaDosSantos/pages/produto.php?id='.$produto['id']?>" class="btn btn-comprar">SAIBA MAIS</a>
    </div>
    <?php endforeach; ?>
  </div>
</section>