<?php
//foreach( $article as $r){
//   echo "<p>". $r ."</p>";

//}
?>

<div class="main">
  <h1 class="heading" >Commandes</h1>
  <!-- search box -->

  <form class="form-inline my-2 my-lg-0">
     <input type="image" id="img" src="./public/images/search-svg.png" alt=""><i>Consultation des commandes</i> 
      <input class="form-control mr-sm-2" type="search"  aria-label="Search" id="search">
  </form>

<div class="table-responsive-sm">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Utilisateur</th>
      <th scope="col">Montant</th>
      <th scope="col">Date</th>
      <th scope="col">Etat</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
/**
 * @var Order $order
 */
foreach ($array_order as $order) {

    ?>
    
     <tr>
      <td><?=$order->getIdOrder();?></td>
      <td><?=$order->getUserName();?></td>
      <td><?=$order->getPrice();?></td>
      <td><?=$order->getCreationDate();?></td>
      <td><?=$order->getState();?></td>  <!-- Verifier le nom dans la BBD -->
      
      

    </tr>
 <?php

}
?>

  </tbody>
</table>

</div>
</div>