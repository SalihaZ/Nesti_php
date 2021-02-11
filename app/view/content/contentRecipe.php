


<?php
//foreach( $recipe as $r){
//   echo "<p>". $r ."</p>";

//}
?>

<html>
<body>

<div class="main">
  <h1 class="heading" >Recettes</h1>
  <!-- search box -->
  
  <form class="form-inline my-2 my-lg-0">
     <input type="image" id="img" src="./public/images/search-svg.png" alt="">
      <input class="form-control mr-sm-2" type="search"  aria-label="Search" id="search">
  </form>
  <button id= "button" type="button" class="btn btn-outline-secondary"> <img src="./public/images/create-svg.png" alt=""> Ajouter</button>
  
  
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
    <tr>
     
      <td>1</td>
      <td>Crèpes</td>
      <td>4</td>
      <td>4</td>
      <td>35min</td>
      <td>Zanoni</td>
      <td><a href="<?=BASE_URL;?>recipe/edit/1">Modifier <br>Supprimer</td></a>

    </tr>
    <tr>
      
      <td>2</td>
      <td>Mousse au chocolat</td>
      <td>2</td>
      <td>2</td>
      <td>3h</td>
      <td>Marx</td>
      <td><a href="<?=BASE_URL;?>rectte/edition/">Modifier <br>Supprimer</td></a>

    </tr>
    <tr>
      
      <td>3</td>
      <td>Eclaire au café</td>
      <td>4</td>
      <td>4</td>
      <td>2h20min</td>
      <td>Gagnaire</td>
      <td><a href="<?=BASE_URL;?>rectte/edition/">Modifier <br>Supprimer</td></a>

    </tr>
  </tbody>
</table>
  </table>
</div>
</div>


</body>
</html>