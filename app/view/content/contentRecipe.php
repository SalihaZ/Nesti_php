<html>
<body>

<div class="main">
  <h1 class="heading">Recettes</h1>
  <!-- search box -->

  <form class="form-inline my-2 my-lg-0">
     <input type="image" id="img" src="./public/images/search-svg.png" alt="">
      <input class="form-control mr-sm-2" type="search"  aria-label="Search" id="search">
  </form>
  <a id= "button" type="button" class="btn btn-outline-secondary" href="<?=BASE_URL?>recipe/create"> <img src="./public/images/create-svg.png" alt=""> Ajouter</a>


    <div class="table-responsive-sm">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Difficulté</th>
      <th scope="col">Pour</th>
      <th scope="col">Temps</th>
      <th scope="col">Chef</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
<tbody>
<?php
  /**
  * @var Recipe $recipe
  */
  foreach ($array_recipe as $recipe) {
  ?>
     <tr>

      <td><?=$recipe->getIdRecipe();?></td>
      <td><?=$recipe->getName();?></td>
      <td><?=$recipe->getDifficulty();?></td>
      <td><?=$recipe->getNumberPeople();?></td>
      <td><?=$recipe->getTime();?></td>
      <td><?=$recipe->getIdChef();?></td>
      <td>
      <a href="<?=BASE_URL;?>recipe/edit/<?=$recipe->getIdRecipe();?>">Modifier</a>
      <br>
      <a href="<?=BASE_URL;?>recipe/delete/1">Supprimer</a>
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
      <td><a href="<?=BASE_URL;?>recipe/edit/1">Modifier</a> <br> <a href="<?=BASE_URL;?>recipe/delete/1">Supprimer</a> </td>


    </tr>
    <tr>

      <td>3</td>
      <td>Eclaire au café</td>
      <td>4</td>
      <td>4</td>
      <td>2h20min</td>
      <td>Gagnaire</td>
      <td><a href="<?=BASE_URL;?>recipe/edit/1">Modifier</a> <br> <a href="<?=BASE_URL;?>recipe/delete/1">Supprimer</a> </td>


    </tr>
    -->
  </tbody>
</table>
  </table>
</div>
</div>


</body>
</html>