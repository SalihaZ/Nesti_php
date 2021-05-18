<?php
//foreach( $article as $r){
//   echo "<p>". $r ."</p>";

//}
?>

<html>
<body>
<div class="main">
  <h1 class="heading" >Articles</h1>
  <!-- search box -->

  <form class="form-inline my-2 my-lg-0">
     <input type="image" id="img" src="./public/images/search-svg.png" alt="">
      <input class="form-control mr-sm-2" type="search"  aria-label="Search" id="search">
  </form>
  <a id= "button" type="button" class="btn btn-outline-secondary" href="<?=BASE_URL?>article/create"> <img src="./public/images/create-svg.png" alt=""> Ajouter</a>


    <div class="table-responsive-sm">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
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
      <td><?=$article->getPrice();?></td>
      <td><?=$article->getType();?></td>  //Verifier le nom dans la BBD
      <td><?=$article->getDateCreation();?></td>
      <td><?=$article->getQuantityByUnit();?></td>
      <td>
        <a href="<?=BASE_URL;?>article/edit/<?=$article->getIdArticle();?>">Modifier</a>
        <br>
        <a href="<?=BASE_URL;?>article/delete/<?=$article->getIdArticle();?>">Supprimer</a>
      </td>

    </tr>
 <?php
} // fin du foreach
?>
<!--
    <tr>

      <td>2</td>
      <td>Mousse au chocolat</td>
      <td>2</td>
      <td>2</td>
      <td>3h</td>
      <td>Marx</td>
      <td><a href="<?=BASE_URL;?>article/edit/1">Modifier</a> <br> <a href="<?=BASE_URL;?>article/delete/1">Supprimer</a> </td>


    </tr>
    <tr>

      <td>3</td>
      <td>Eclaire au café</td>
      <td>4</td>
      <td>4</td>
      <td>2h20min</td>
      <td>Gagnaire</td>
      <td><a href="<?=BASE_URL;?>article/edit/1">Modifier</a> <br> <a href="<?=BASE_URL;?>article/delete/1">Supprimer</a> </td>


    </tr>
    -->
  </tbody>
</table>
  </table>
</div>
</div>


</body>
</html>