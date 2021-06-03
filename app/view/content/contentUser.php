<div class="main">
  <h1 class="heading">Utilisateurs</h1>
  <!-- search box -->

  <form class="form-inline my-2 my-lg-0">
     <input type="image" id="img" src="./public/images/search-svg.png" alt="">
      <input class="form-control mr-sm-2" type="search"  aria-label="Search" id="search">
  </form>
  <a id= "button" type="button" class="btn btn-outline-secondary" href="<?=BASE_URL?>user/create"> <img src="./public/images/create-svg.png" alt=""> Ajouter</a>


    <div class="table-responsive-sm">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Rôle</th>
      <th scope="col">Dernière connexion</th>
      <th scope="col">Temps</th>
      <th scope="col">Etat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
<tbody>
  
<?php
 /**
  * @var User $user
  */
  foreach ($array_user as $user){
?>
<tr>

<td><?=$user->getIdUser();?></td>
<!--<td><?=$user->getFirstName().getLastName();?></td>-->
<!--<td><?=$user->getRole();?></td>-->
<td><?=$user->getLastConnexion();?></td>
<td><?=$user->getTime();?></td>
<td><?=$user->getState();?></td>
<td>
<a href="<?=BASE_URL;?>user/edit/<?=$user->getIdUser();?>">Modifier</a>
<br>
<a href="<?=BASE_URL;?>user/delete/1">Supprimer</a>
</td>

</tr>
<?php
} // fin du foreach//transaction à mettre en place
?>
