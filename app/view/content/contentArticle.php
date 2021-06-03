<?php
//foreach( $article as $r){
//   echo "<p>". $r ."</p>";

//}
?>

<div class="container-fluid">
  <h1 class="heading" >Articles</h1>
  <!-- search box -->

  <form class="form-inline my-2 my-lg-0">
     <input type="image" id="img" src="./public/images/search-svg.png" alt="">
      <input class="form-control mr-sm-2" type="search"  aria-label="Search" id="search">
  </form>
<div class="bt-group">
  <a id= "button" type="button" class="btn btn-outline-secondary" href="<?=BASE_URL?>article/order"> 
  <img src="./public/images/create-svg.png" alt="">Commandes</a>
 
  <a id= "button" type="button" class="btn btn-outline-secondary" href="<?=BASE_URL?>article/import"> 
  <img src="./public/images/create-svg.png" alt="">Importer</a>
  </div>



    <div class="table-responsive-sm">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Nom pour l'utilisateur</th>
      <th scope="col">Prix de vente</th>
      <th scope="col">Type</th>
      <th scope="col">Dernière importation</th>
      <th scope="col">Stock</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
/**
 * @var Article $article
 */
foreach ($array_article as $article) {
    ?>
     <tr>

      <td><?=$article->getIdExtern();?></td>
      <td><?=$article->getName();?></td>
      <td><?=$article->getUserArticleName();?></td>
      <td><?=$article->getPrice();?></td>
      <td><?=$article->getType();?></td>  <!-- Verifier le nom dans la BBD -->
      <td><?=$article->getDateCreation();?></td>
      <td><?=$article->getQuantityByUnit();?></td>
      <td>
        <a href="<?=BASE_URL;?>article/edit/<?=$article->getIdExtern();?>">Modifier</a>
        <br>
        <a href="<?=BASE_URL;?>article/delete/<?=$article->getIdExtern();?>">Supprimer</a>
      </td>

    </tr>
 <?php
}
?>

  </tbody>
</table>

</div>
</div>


