<div class="main">

<h1 class="heading">Articles</h1>

<p>Article n° <?= $id_article; ?>
<form method= "POST" >

<div>
    <label for="articleName" class="col-4 col-form-label">Nom d'usine de l'article</label><br>
    <input disabled id="articleName" name="name_article" placeholder="Nom d'usine de l'article" type="text" value="<?=$article->getName();?>"><br>
    <label for="userArticleName" class="col-4 col-form-label">Nom de l'article pour l'utilisateur</label>
    <input id="userArticleName" name="user_article" type="text" value="<?= $article->getUserArticleName();?>"><br>
    <label for="id" class="col-4 col-form-label">Identifiant</label>
    <input disabled id="id" name="id" type="text"  value="<?=$article->getIdExtern();?>"><br>
    <label for="price" class="col-4 col-form-label">Prix de vente</label>
    <input disabled id="price" name="price" type="text" value="<?=$article->getPrice();?>"><br>
    <label for="stock" class="col-4 col-form-label">Stock</label>
    <input disabled id="stock" name="stock" type="text" value="<?=$article->getStock();?>" ><br>

    <div>
      <button name="submit" type="submit" value="send" class="btn btn-success">Valider</button>
      <button name="delete" type="delete" class="btn btn-danger">Supprimer</button>
    </div><br>

</div>
</div>